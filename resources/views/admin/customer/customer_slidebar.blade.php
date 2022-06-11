<?php
// $email=Session::get('useremail');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap Core CSS -->
    <link href="/adminside/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/adminside/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/adminside/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/adminside/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/adminside/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/adminside/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin" style='color:white'>UpTimerRobot</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>




            <ul class="nav navbar-right navbar-top-links">

              
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                        <i class="fa fa-user fa-fw"></i> Welcome , {{ Auth::user()->name }}

                    </a>

                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>




            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <img src='/adminside/logo.png' style='height:70px;width:220px;border:1px solid black' />

                        </li>
                        <li>
                            <a href="admin" class="active"><i class="fa fa-dashboard fa-fw"></i>
                                Dashboard</a>
                        </li>
                        <li>
                            <a href="monitor_type"><i class="fa fa-bars fa-fw"></i> Monitor Type</a>
                        </li>
                        <li>
                            <a href="monitor"><i class="fa fa-flag fa-fw"></i> Monitor </a>
                        </li>
                        <li>
                            <a href="users"><i class="fa fa-list fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="contact_details"><i class="fa fa-bars fa-fw"></i> Contact details</a>
                        </li>
                        <li>





                    </ul>
                </div>
            </div>




        </nav>

        <!-- LogOut Model -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
