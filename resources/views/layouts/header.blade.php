<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>IDS</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/css/dashboard.css" rel="stylesheet" />

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body class="header-fixed">

<div class="wrapper">
    <!--== Sidebar ==-->
    <div class="sidebar">
        <div class="sidebar-wrapper">
            <div class="logo user-id">
                <img class="img-responsive" src="/img/avatar.jpg" alt="avatar">
                <br>
                <p class="simple-text">{{Illuminate\Support\Facades\Auth::user()->name}}<br></p>
                <ul class="side-title margin-tb-40">{{Illuminate\Support\Facades\Auth::user()->email}}</ul>
            </div>

            <ul class="nav-nav margin-bottom-25">
                <li class="active">
                    <a href="{{route('home')}}">Dashboard</a>
                </li>
                @if(Illuminate\Support\Facades\Auth::user()->id==1)
                    <li class="active">
                    <a href="{{route('all')}}">All Transactions</a>
                    </li>
                @endif
                <p class="side-title margin-tb-40">
                    Transactions
                </p>
                <li>
                    <a href="#" data-toggle="modal" data-target="#formModal">Buy E-currency</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#formModal2">Sell E-currency</a>
                </li>
                <p class="side-title margin-tb-40">
                    Account
                </p>
                <li>
                    <a href="#" data-toggle="modal" data-target="#formModal3">Change Name</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#formModal3">Change Password</a>
                </li>
            </ul>
            <ul class="nav">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>>

                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--== End Sidebar ==-->
    <!--== Main Panel ==-->
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid padding-top-15">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img id="logo-header" src="/img/logo.png" width="200" alt="Logo">
                    </a>
                </div>

                <div class="collapse navbar-collapse">

                </div>
            </div>
        </nav>
        @yield('content')
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul class="footer-menu">
                        <li>
                            <a href="#">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Our solutions
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                FAQs
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Contact us
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> <a href="#">IDS</a>
                </p>
            </div>
        </footer>

    </div>
    <!--== End Main Panel ==-->
</div>
<!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="/js/light-bootstrap-dashboard.js"></script>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="formModalLabel1" class="modal-title">Buy Currency</h4>
            </div>
            <div class="modal-body">
                <form class="reg-page log-reg-page" action="{{route('save')}}" method="post">

                    <label>Amount </label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="amount" type="number" required>
                    <input type="hidden" value="buy" name="type">
                    <label>Exchange Rate</label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="exchange_rate" type="number" required>
                    {{ csrf_field() }}
                    <label>e-currency</label>
                    <select class="form-control margin-bottom-20" name="e_currency" required>
                        <option>Select an Option</option>
                        <option value="payoneer">Payoneer</option>
                        <option value="paypal">Paypal</option>
                        <option value="etherum">Etherum</option>
                        <option value="skrill">Skrill</option>
                        <option value="perfect money">Perfect Money</option>
                        <option value="bitcoins">BitCoin</option>
                    </select>

                    <label>Bank </label>
                    <input class="form-control margin-bottom-20" placeholder="GTBank" name="bank" type="text">

                    <label>Bank Account Number</label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="bank_details" type="text">
                    <input type="hidden" value="pending" name="status">
                    <button class="btn-u btn-block" type="submit">Save</button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="formModalLabel1" class="modal-title">Sell Currency</h4>
            </div>
            <div class="modal-body">
                <form class="reg-page log-reg-page" action="{{route('save')}}" method="post">

                    <label>Amount </label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="amount" type="number" required>
                    <input type="hidden" value="sell" name="type">
                    <label>Exchange Rate</label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="exchange_rate" type="number" required>
                    {{ csrf_field() }}
                    <label>e-currency</label>
                    <select class="form-control margin-bottom-20" name="e_currency" required>
                        <option>Select an Option</option>
                        <option value="payoneer">Payoneer</option>
                        <option value="paypal">Paypal</option>
                        <option value="etherum">Etherum</option>
                        <option value="skrill">Skrill</option>
                        <option value="perfect money">Perfect Money</option>
                        <option value="bitcoins">BitCoin</option>
                    </select>

                    <label>Bank </label>
                    <input class="form-control margin-bottom-20" placeholder="GTBank" name="bank" type="text" >

                    <label>Bank Account Number</label>
                    <input class="form-control margin-bottom-20" placeholder="5413018441" name="bank_details" type="text" >
                    <input type="hidden" value="pending" name="status">
                    <button class="btn-u btn-block" type="submit">Save</button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="formModal3" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 id="formModalLabel1" class="modal-title">Edit Profile</h4>
            </div>
            <div class="modal-body">
                <form class="reg-page log-reg-page" action="{{route('save_user')}}" method="post">

                    <label>Name </label>
                    <input class="form-control margin-bottom-20" value={{Auth::user()->name}} name="name" type="text" required>

                    <label>Email</label>
                    <input class="form-control margin-bottom-20" value={{Auth::user()->email}} name="email" type="text" disabled>
                    {{ csrf_field() }}

                    <label>Password </label>
                    <input class="form-control margin-bottom-20"  name="bank" type="password" required>

                    <button class="btn-u btn-block" type="submit">Save</button>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
</body>

</html>