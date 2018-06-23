<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction=Transaction::where('user_id',Auth::user()->id)->paginate(25);
        $title="Your Transaction history";
        return view('dashboard',['transactions'=>$transaction,'title'=>$title]);
    }
    public function all()
    {
        $transaction=Transaction::paginate(25);
        $title="All Transactions";

        return view('dashboard',['transactions'=>$transaction,'title'=>$title]);
    }
    public function info($id)
    {

        $transaction=Transaction::find($id);
        $name=User::find($transaction->user_id)->name;

        return view('info',['transaction'=>$transaction,'name'=>$name]);
    }
    public function paid($id)
    {

        $transaction=Transaction::find($id);
        $transaction->status="paid";
        $transaction->save();
        $success=Session::flash('alert-success', 'Transaction marked as paid');
        return redirect(route('home',['success'=>$success]));
    }
    public function cancelled($id)
    {

        $transaction=Transaction::find($id);
        $transaction->status="cancelled";
        $transaction->save();
        $success=Session::flash('alert-danger', 'Transaction cancelled');
        return redirect(route('home',['success'=>$success]));
    }
    public function save(Request $request)
    {
        $transaction=new Transaction();
        $transaction->type=$request->type;
        $transaction->amount=$request->amount;
        $transaction->exchange_rate=$request->exchange_rate;
        $transaction->amount_payable=$request->exchange_rate * $request->amount ;
        $transaction->e_currency=$request->e_currency;
        $transaction->bank=$request->bank;
        $transaction->bank_details=$request->bank_details;
        $transaction->status=$request->status;
        $transaction->user_id=$user = Auth::user()->id;
        $transaction->save();
        $success=Session::flash('alert-success', 'success');
        return redirect(route('home',['success'=>$success]));
    }
    public function edit_user(Request $request)
    {
        $user=User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->password=bcrypt($request->password);
        $user->save();
        $success=Session::flash('alert-success', 'profile Updated');
        return redirect(route('home',['success'=>$success]));
    }
}
