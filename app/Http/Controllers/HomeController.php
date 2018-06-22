<?php

namespace App\Http\Controllers;

use App\Transaction;
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
        $transaction=Transaction::paginate(1);

        return view('dashboard',['transactions'=>$transaction]);
    }
    public function info($id)
    {
        $transaction=Transaction::find($id);

        return view('info',['transaction'=>$transaction]);
    }
    public function save(Request $request)
    {
       // dd($request);
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
}
