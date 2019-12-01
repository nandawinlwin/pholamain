<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Real Estate Website</title>
    <!-- Bootstrap Core CSS -->

    <link href="<?php echo url(''); ?>/front-end/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url(''); ?>/front-end/css/custom.css" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo url(''); ?>"><img src="<?php echo url(''); ?>/front-end/img/logo.jpg" width="100px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="#"><i class="fas fa-home" style="font-size:20px;"></i></span></a>
                    </li>
                    <li>
                        <a href="#">၀ယ္ရန္</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ငွားရန္ <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">စီမံကိန္းအသစ္ ျကိုပြိုင့္မာ်း <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">အိမ္ျခံေျမလမ္းညြန္</a>
                    </li>
                    <li>
                        <a href="#">အက်ိုးေဆာင္မ်ား</a>
                    </li>
                    <li>
                        <a href="#">အိမ္ျခံေျမျပပြဲမ်ား</a>
                    </li>
                    <li>
                        <a href="#">သတင္း</a>
                    </li>
                    @auth
                       
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ကိုယ္ပိုင္<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li>
                        <a href="/../addpost">အေရာင္းတင္ထားေသာ အိမ္မ်ား</a>
                        </li>   
                        <li>
                        <a href="/../addpost">အေရာင္းတင္ရန္</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ထြက္ရန္') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                        </ul>
                    </li>
                    @else
                        <li>
                        <a href="/../login">၀င္ပါ</a>
                        </li>
                    @endauth
                    

                </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-top: -5px;">
                    <!-- <li>
                        <a href="#"><span class="glyphicon glyphicon-home"></span></a>
                    </li> -->
                    <li>
                        <a href="#"><img src="https://via.placeholder.com/150x60" width=""></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>