@extends('layouts.header')

@section('content')
    <div class="content tab-grey hide-480">
        <div class="container-fluid">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row tab-content">
                <h3 class="d_active hide-all" rel="home">
                    Dashboard
                </h3>
                <div id="home" class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Transaction Details</h4>

                            <p>Name:{{$name}}</p>
                            <p>Amount:{{$transaction->amount}}</p>
                            <p>Bank Details:{{$transaction->bank}}<br>{{$transaction->bank_details}}</p>
                            <p>Transaction Type:{{$transaction->type}}</p>
                            <p>Amount Payable: &#8358; {{ number_format($transaction->amount_payable) }}</p>
                            <p>E-currency:{{$transaction->e_currency}}</p>
                            <p>Status:{{$transaction->status}}</p>
                            <p>Date:{{$transaction->created_at}}</p>

                        </div>
                        <div class="table-responsive table-full-width table-container">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
