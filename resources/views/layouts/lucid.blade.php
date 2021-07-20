<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Contact Person : 0823-2000-3832">
    <meta name="author" content="Yosephus Wahyu Eko Novianto, S.Kom">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('lucid') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('lucid') }}/assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('lucid') }}/assets/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet"
        href="{{ asset('lucid') }}/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
    <link rel="stylesheet" href="{{ asset('lucid') }}/assets/vendor/toastr/toastr.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('lucid') }}/mini-sidebar/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('lucid') }}/mini-sidebar/assets/css/color_skins.css">


    <link rel="stylesheet" href="{{ asset('lucid/') }}/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('lucid/') }}/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('lucid/') }}/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

    <link rel="stylesheet" href="{{ asset('lucid') }}//assets/vendor/sweetalert/sweetalert.css" />

    <style>
        #topbar-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #05ab08;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        #alert-notification {
            display: none;
            position: fixed;
            z-index: 99999;
            background: #e3342f;
            color: #fff;
            padding: 15px;
            left: 0;
            right: 0;
            top: 0;
            text-align: center;
        }

        .open-button {
            background-color: #2c61a5;
            color: white;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.9;
            position: fixed;
            z-index: 999;
            bottom: 0;
            right: 20px;
            width: 150px;
        }

        /* The popup chat - hidden by default */
        .chat-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            width: 300px;
            border: 5px solid #f1f1f1;
            z-index: 99999;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            height: 350px;
            overflow-y: scroll;
            padding: 10px;
            background-color: white;
        }

        /* Full-width textarea */
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #fff;
            border: 1px solid #ccc;
            resize: none;
            min-height: 100px;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

    </style>

</head>

<body class="theme-cyan layout-fullwidth">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('lucid') }}/assets/images/logo-icon.svg" width="48" height="48"
                    alt="Lucid"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div id="topbar-notification">
        <div class="container">
            <div id="text-notif">
                My awesome top bar
            </div>
        </div>
    </div>

    <div id="alert-notification">
        <div class="container">
            <div id="alert-notif">
                My awesome top bar
            </div>
        </div>
    </div>

    <div id="wrapper">
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>

                <div class="navbar-brand">
                    <a href="index.html"><img src="{{ asset('lucid') }}/assets/images/logo.svg" alt="Lucid Logo"
                            class="img-responsive logo"></a>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>

                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="doctor-events.html" class="icon-menu d-none d-sm-block d-md-none d-lg-block"><i
                                        class="icon-calendar"></i></a>
                            </li>
                            <li>
                                <a href="app-chat.html" class="icon-menu d-none d-sm-block"><i
                                        class="icon-bubbles"></i></a>
                            </li>
                            <li>
                                <a href="app-inbox.html" class="icon-menu d-none d-sm-block"><i
                                        class="icon-envelope"></i><span class="notification-dot"></span></a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu notifications">
                                    <li class="header"><strong>You have 4 new Notifications</strong></li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-warning"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Campaign <strong>Holiday Sale</strong> is nearly
                                                        reach budget limit.</p>
                                                    <span class="timestamp">10:00 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-like text-success"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Your New Campaign <strong>Holiday Sale</strong> is
                                                        approved.</p>
                                                    <span class="timestamp">11:30 AM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-pie-chart text-info"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Website visits from Twitter is 27% higher than last
                                                        week.</p>
                                                    <span class="timestamp">04:00 PM Today</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <div class="media-left">
                                                    <i class="icon-info text-danger"></i>
                                                </div>
                                                <div class="media-body">
                                                    <p class="text">Error on website analytics configurations</p>
                                                    <span class="timestamp">Yesterday</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all
                                            notifications</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu"
                                    data-toggle="dropdown"><i class="icon-equalizer"></i></a>
                                <ul class="dropdown-menu user-menu menu-icon">
                                    <li class="menu-heading">ACCOUNT SETTINGS</li>
                                    <li><a href="javascript:void(0);"><i class="icon-note"></i> <span>Basic</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-equalizer"></i>
                                            <span>Preferences</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-lock"></i> <span>Privacy</span></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="icon-bell"></i>
                                            <span>Notifications</span></a></li>
                                    <li class="menu-heading">BILLING</li>
                                    <li><a href="javascript:void(0);"><i class="icon-credit-card"></i>
                                            <span>Payments</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-printer"></i>
                                            <span>Invoices</span></a></li>
                                    <li><a href="javascript:void(0);"><i class="icon-refresh"></i>
                                            <span>Renewals</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="icon-menu"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                        class="icon-login"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        @include('include.sidebar')


        @yield('content')

    </div>

    <!-- Javascript -->
    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/libscripts.bundle.js"></script>
    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/chartist.bundle.js"></script>
    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/knob.bundle.js"></script>
    <!-- Jquery Knob-->
    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/flotscripts.bundle.js"></script>
    <!-- flot charts Plugin Js -->
    <script src="{{ asset('lucid') }}/assets/vendor/toastr/toastr.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/flot-charts/jquery.flot.selection.js"></script>

    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('lucid') }}/mini-sidebar/assets/js/index.js"></script>

    <script src="{{ asset('lucid/assets/vendor/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('lucid/mini-sidebar/assets/js/pages/forms/dropify.js') }}"></script>



    <script src="{{ asset('lucid') }}/mini-sidebar/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="{{ asset('lucid') }}/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="{{ asset('lucid') }}/mini-sidebar/assets/js/pages/tables/jquery-datatable.js"></script>

    <script>
        function showNotif(text) {

            $('#text-notif').html(text);
            $('#topbar-notification').fadeIn();

            setTimeout(function() {
                $('#topbar-notification').fadeOut();
            }, 2000)
        }

        function showAlert(text) {

            $('#alert-notif').html(text);
            $('#alert-notification').fadeIn();

            setTimeout(function() {
                $('#alert-notification').fadeOut();
            }, 2000)
        }
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.editkategori', function() {
                var id = $(this).data('id');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('kategori.edit') }}",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        
                        $('[name="idkategori"]').val(data.id);
                        $('[name="nama"]').val(data.nama);
                    }
                });
            });
        });
    </script>

    @yield('script')

    @if (!empty(Session::get('status')) && Session::get('status') == '1')
        <script>
            showNotif("{{ Session::get('message') }}");
        </script>
    @endif

    @if (!empty(Session::get('status')) && Session::get('status') == '2')
        <script>
            showAlert("{{ Session::get('message') }}");
        </script>
    @endif
</body>
