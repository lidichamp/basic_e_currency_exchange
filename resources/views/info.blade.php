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
                        </div>
                        <div class="table-responsive table-full-width table-container">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="formModalLabel1" class="modal-title">Edit recurring payment</h4>
                </div>
                <div class="modal-body">
                    <form class="reg-page log-reg-page">

                        <label>Customer ID </label>
                        <input class="form-control margin-bottom-20" placeholder="5413018441" type="text">

                        <label>Customer Name </label>
                        <input class="form-control margin-bottom-20" placeholder="Femi Etowa" type="text">

                        <label>Amount </label>
                        <input class="form-control margin-bottom-20" placeholder="N25000" type="text">

                        <label>Frequency </label>
                        <select class="form-control margin-bottom-20">
                            <option>Select an Option</option>
                            <option>Choose me</option>
                            <option>Choose us</option>
                        </select>

                        <label>Start Date </label>
                        <input class="form-control margin-bottom-20" placeholder="January 24, 2017" type="text">

                        <label>End Date </label>
                        <input class="form-control margin-bottom-20" placeholder="January 24, 2017" type="text">

                        <button class="btn-u btn-block" type="submit">Save</button>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

@endsection
