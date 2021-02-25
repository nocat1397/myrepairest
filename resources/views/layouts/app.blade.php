<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>MyRepairest</title>
    <link rel="icon" href="{{url('images/logo1-top.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
      
          $(".loader").fadeOut(); 
        $("#preloder").delay(400).fadeOut("slow");
        });
      </script>
    <style>
        #available {
            display: none;
        }
        #otpavailable {
            display: none;
        }
        #pass{
            display: none;
        }
        .btn-success {
            border-radius: 50%;
            background-color: #a05535!important;
            color: #fff;
            width: 40px;
            font-size: 15px;
            font-weight: bold;
            border: none; 
        }
        .btn-success:hover {
            color: #bc7509!important;
            box-shadow: 0px 5px 16px 0px rgba(0,0,0,0.2)!important;
        }
        .card-header {
            background-color: #a05535;
            color: white;
            font-size: 20px;
            font-weight: 600;
        }
        .btn-primary{
            background-color: #bc7509;
            color: #fff;
            text-transform: uppercase;
            border-radius: 0!important;
            font-size: .8em!important;
            padding: 12.8px 24px!important;
            padding: 0.8rem 1.5rem!important;
            font-weight: 600!important;
            border: none;
            clip-path: polygon(100% 0%, 100% 74%, 49% 96%, 0 75%, 0 0);
        }
        .btn-primary:hover {
            color: white;
            background-color: #a05535;
        }
        .bg-greeen {
            background-color: #a05535!important;
            color: #fff!important;
        }
        .card {
            border: none;
            border-radius: 10px;
            
        }
        .card-header {
             clip-path: polygon(100% 0%, 100% 74%, 49% 96%, 0 75%, 0 0);
        }
        .fa-lg {
            color: #a05535;
        }
        .fa-lg:hover {
            color: #bc7509;
            transition: .2s ease-in-out;
        }
        #preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #fff;
}

.loader {
	width: 30px;
	height: 30px;
	border: 3px solid #a05535;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	border-left-color: transparent;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
	}

@keyframes loader {
	0% {
		transform: rotate(0deg);
	}
	50% {
		transform: rotate(180deg);
	}
	100% {
		transform: rotate(360deg);
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
	}
	50% {
		-webkit-transform: rotate(180deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
	}
}

    </style>
</head>
<body style="background-color: white">
    <div id="preloder">
        <div class="loader"></div>
      </div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{url('images/logo1-top.png')}}" height="125">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-success btn-sm text-white" href="{{ route('login') }}" title="SignIn"><i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    {{-- <footer>
        <div class=" bg-greeen text-center p-2">
    
            <span class="">©<script>document.write(new Date().getFullYear());</script> | made with love by <a class="text-decoration-none text-light" href="https://nocat.tech"> nocat technologies pvt. ltd.</a> | Powered by justrepairit</span>
       
       </div>
    </footer> --}}
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#change').click(function(e){
                e.preventDefault();
                    var number = $('#mobile').val();
                    // console.log(number);
                    $.ajax({
                        url:"/mobilecheck",
                        method:"post",
                        data:{
                          number:number
                        },
                        // dataType:"tel",
                        success:function(response){
                            var allValues = JSON.stringify(response);
                            var stringify = JSON.parse(allValues);
                            //  console.log(response);
                           
                            if(Object.keys(stringify).length !== 0) {
                           
                            var user_id = stringify[0].id;
                            var mobile = stringify[0].mobile;
                             $('#u_id').val(user_id);
                                $('#mobi').val(mobile);
                                $('#mob').hide();
                                $('#pass').show();
                                $('#available').hide();
                           
                           
                            } else {
                                $('#available').show();
                            }
                        },
                    });
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#otp').blur(function(e){
                e.preventDefault();
                    var otp = $('#otp').val();
                
                    // console.log(number);
                    $.ajax({
                        url:"/otpcheck",
                        method:"post",
                        data:{
                          otp:otp
                        },
                        // dataType:"tel",
                        success:function(response){
                            var allValues = JSON.stringify(response);
                            var stringify = JSON.parse(allValues);
                            // console.log(response);
                            if(Object.keys(response).length !== 0) {
                                $('#otp').removeClass('form-control alert alert-danger mb-0');
                                $('#otp').addClass('form-control alert alert-success');
                                $('#otpavailable').hide();
                            } else {
                                $('#otp').addClass('form-control alert alert-danger mb-0');
                                $('#otpavailable').show();
                            }
                        },
                    });
            });
        });
    </script>
        <script>
            $(document).ready(function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#passchange').click(function(e){
                    e.preventDefault();
                        var user_id = $('#u_id').val();
                        var password = $('#password').val();
                        var otp = $('#otp').val();
                    
                        // console.log(number);
                        $.ajax({
                            url:"/change_password",
                            method:"post",
                            data:{
                              user_id:user_id,
                              password:password,
                              otp:otp
                            },
                            // dataType:"tel",
                            success:function(response){
                                console.log(response);
                                if(Object.keys(response).length !== 0) {
                                    var number = $('#mobi').val();
                                var password = $('#password').val();

                                $.ajax({
                                    url:"/login",
                                    method:"post",
                                    data:{

                                      email:number,
                                      password:password
                                    },
                                    // dataType:"tel",
                                    success:function(response){
                                        var
                                            closeInSeconds = 3,
                                            displayText = "Logging in #1 seconds."
                                            
                                        swal({
                                          title: "Success",
                                          text: displayText.replace(/#1/, closeInSeconds),
                                          icon: "success",
                                          timer: 3000,
                                          buttons: false,
                                        }),
                                        timer = setInterval(function() {
                                            closeInSeconds--;
                                            if (closeInSeconds < 0) {                  
                                                clearInterval(timer);
                                            }
                                            $('.sweet-alert > p').text(displayText.replace(/#1/, closeInSeconds));
                                        }, 3000);
                                        window.setTimeout(function(){
                                            window.location ="../dashboard"; 
                                        } ,3000);

                                    },
                                });
                                    $('#otp').removeClass('form-control alert alert-danger mb-0');
                                    $('#otp').addClass('form-control alert alert-success');
                                    $('#otpavailable').hide();
                                } else {
                                    $('#otp').addClass('form-control alert alert-danger mb-0');
                                    $('#otpavailable').show();
                                }
                                
                            },
                        });
                });
            });
        </script>
    <script type="text/javascript">
        $("#password").password('toggle');
    </script>
</body>
</html>
