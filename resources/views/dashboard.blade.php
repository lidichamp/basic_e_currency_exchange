@extends('layouts.header')

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif
        @endforeach
    </div>
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
                                    <h4 class="title">Transaction history</h4>
                                </div>
                                <div class="table-responsive table-full-width table-container">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Exchange rate</th>
                                                <th>Amount Payable</th>
                                                <th>E-currency</th>
                                                <th>Bank</th>
                                                <th>Bank Details</th>
                                                <th>Date Started</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($transactions as $transaction)
                                                    <td>{{$transaction->id}}</td>
                                                    <td>{{$transaction->type}}</td>
                                                    <td>{{$transaction->amount}}</td>
                                                    <td>{{$transaction->exchange_rate}}</td>
                                                    <td>{{$transaction->amount_payable}}</td>
                                                    <td>{{$transaction->e_currency}}</td>
                                                    <td>{{$transaction->bank}}</td>
                                                    <td>{{$transaction->bank_details}}</td>
                                                    <td>{{$transaction->created_at}}</td>
                                                    <td>{{$transaction->status}}</td>
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection
