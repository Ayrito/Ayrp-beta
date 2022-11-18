<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
    <title>Ayrp Project</title>





    <!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
	<link href="{{ asset('css/materialize.css') }}" rel="stylesheet">
	<link href="{{ asset('css/searchbar.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php error_reporting(0); ?>
        


		<!--Main Navigation-->
		

		<!--Mobile Navigation-->
        <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
                    <div class="background">
                        <img src="{{ URL::asset('images/nav-bg.png') }}">
                    </div>
                    <a href="#user"><img class="circle" src="{{ URL::asset('images/logo.png') }}"></a>
                    <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
                    <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
                </div></li>
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i>Home</a></li>
            <li><a href="#!"><i class="material-icons">cloud</i>Account</a></li>
            <li><a href="#!">Status</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">info</a></li>
			<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
			<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
        </ul>
		<!--Mobile Navigation-->
		
		
<!-- Navigation -->
<div class="navbar-fixed">
<nav class="nav-extended">

    <!-- Side Nav -->
    <div>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
    </div>
    <!-- Side Nav -->

    <div class="nav-wrapper">
        <div class="z-depth-5">
            <div class="left-align"><a href="{{ url('/') }}" class="brand-logo left hide-on-med-and-down black-text" style="padding-left: 50px;">Ayrp</a></div>
			
		<ul class="container hide-on-med-and-down">
        <li><a class="black-text" href="{{ url('/about') }}">About</a></li>
        <li><a class="black-text" href="{{ url('/archive') }}">Archive</a></li>
        <li><a class="black-text" target="_blank" href="https://ayrito.github.io/ayrp-cv/">Blog</a></li>
		</ul>
			
            <ul class="right hide-on-med-and-down">
                
                <!-- Right Side Of Navbar -->
                    
					<!-- Authentication Links -->
					<li class="divider">
                        @guest
                            <li class="nav-item">
                                <a class="black-text nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="black-text nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
						<li><a href="#" class='dropdown-trigger btn blue' href='#' role="button" data-target='dropdown1'>{{ Auth::user()->name }} </a></li>
                            
							<li class="nav-item dropdown">
                                
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                            </li>
                        @endguest
                    </li>
                
                <li><a href="#" class='dropdown-trigger btn btn-floating white' href='#' data-target='dropdown2'><i class="material-icons black-text">more_vert</i></a></li>
            </ul>

            <!-- search -->
            <form action="" class="browser-default right">
                <input id="search-input" placeholder="Search" type="text" class="browser-default search-field" name="q" value="" autocomplete="off" aria-label="Search box">
                <label for="search-input"><i class="material-icons search-icon">search</i></label>
                <i class="material-icons search-close-icon">cancel</i>
                <div class="search-popup">
                    <div class="search-content">
                        <label class="search-heading">Most Visited</label>
                        <ul class="popup-list">
                            <li class=""><a class="grey-text" href="#">Google</a></li>
                        </ul>
                    </div>
                </div>
            </form>
            <!-- search -->

        </div>
    </div>
</nav>
</div>
<ul id='dropdown1' class='dropdown-content'>
	<li><a class="dropdown-item black-text" href="/home">
        {{ __('Account') }}
     </a></li>
    <li><a class="dropdown-item black-text" href="{{ route('logout') }}"
           onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
     </a></li>
</ul>


<!-- dot button -->
<ul id='dropdown2' class='dropdown-content'>
    <li><a href="#account" class="modal-trigger black-text"><i class="material-icons"></i>account</a></li>
    <li><a href="#settings" class="modal-trigger black-text">Settings</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#help" class="modal-trigger black-text">Help</a></li>
    <li><a href="#contact" class="modal-trigger black-text"><i class="material-icons"></i>contact</a></li>
    <li><a href="#feedback" class="modal-trigger black-text"><i class="material-icons"></i>feedback</a></li>
</ul>
<!-- dot button -->




<!--help-->

<div id="help" class="modal">
    <h5 class="modal-close" style="padding-left: 20px;">&#10005;</h5>
    <div class="modal-content center">

        <img src="{{ URL::asset('images/icons/help.png') }}" style="width:15%; height:15%" draggable="false">

        <h4>Need Help?</h4>
        <br>

        <p>
            If you need any help please contact us at example@mail.com ,
        </p>
        <p>
            or you can use our feadback field to share your infos.
        </p>

    </div>
</div>

<!--help-->

<!--contact-->
<div id="contact" class="modal">
    <h5 class="modal-close" style="padding-left: 20px;">&#10005;</h5>
    <div class="modal-content">


        <h4 class="center">Looking for more?</h4>


        <h5 class="center">
            here you can find us in social Media!
        </h5>
        <br>

        <form>
            <div class="row">
                <div class="col s12">
                    <a class="col s3 m3" href="#!">
                        <div class="card blue darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Twitter</span>
                                <p>Check our Twitter page!</p>
                            </div>
                        </div>
                    </a>

                    <a class="col s3 m3" href="#!">
                        <div class="card red darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">YouTube</span>
                                <p>Follow us in Youtube!</p>
                            </div>
                        </div>
                    </a>

                    <a class="col s3 m3" href="#!">
                        <div class="card orange darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Reddit</span>
                                <p>Check us in our reddit page!</p>
                            </div>
                        </div>
                    </a>

                    <a class="col s3 m3" href="#!">
                        <div class="card indigo accent-3">
                            <div class="card-content white-text">
                                <span class="card-title">Discord</span>
                                <p>Become part of our Commiunity!</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </form>

        <br>

    </div>
</div>

<!--contact-->


<!--Feedback-->

<div id="feedback" class="modal">
    <h5 class="modal-close" style="padding-left: 20px;">&#10005;</h5>
    <div class="modal-content center">


        <h4>Have you got any idea?</h4>
        <br>

        <p>
            We would like to know your thoughts.
        </p>

        <div class="row">
            <form class="col s12">
                <div class="row">

                    <div class="input-field col s6">
                        <i class="material-icons prefix">person</i>
                        <input id="feedbackname" type="text" class="validate">
                        <label for="feedbackname">Name</label>
                    </div>

                    <div class="input-field col s6">
                        <i class="material-icons prefix">email</i>
                        <input id="feedbackmail" type="email" class="validate" required>
                        <label for="feedbackmail">mail</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea id="icon_prefix2" class="materialize-textarea" required></textarea>
                        <label for="icon_prefix2">Feedback</label>
                    </div>

                </div>
                <button class="btn waves" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
            </form>

        </div>

    </div>
</div>

<!--Feedback-->


	<!--End Main Navigation-->
	
</head>

<body>
<div id="app">
