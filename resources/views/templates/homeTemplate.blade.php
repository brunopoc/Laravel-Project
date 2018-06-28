<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Novo Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  
        

    </head>
    <body>
        
        <div> <!--- BARRA SUPERIOR - NAV MENU --->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#drop-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="drop-menu">
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item active">
                            <a class="nav-link" href="index">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SOBRE NÓS</a>
                        </li>
                        
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">LOGAR</a>
                        </li>
                        <li class="nav-item" style=" padding: 6px 8px 0px 8px" >
                            |
                        </li>
                        <li class="nav-item" >
                                <a class="nav-link" href="{{url('/register')}}">REGISTRE-SE</a>
                        </li>
                        @else
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="    event.preventDefault();
                                                document.getElementById('logout-form').submit();
                                            ">
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
            </nav>
        </div> <!--- BARRA SUPERIOR - NAV MENU [FIM] --->
        
         @yield('content')
         <footer>
             <div class="row" id="footer">
                 <div class="container">
                     <div class="row pt-4 pb-5">
                        <div class="col-md-4">
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2</li>
                                <li>Item 3</li>
                                <li>Item 4</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2</li>
                                <li>Item 3</li>
                                <li>Item 4</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>Item 1</li>
                                <li>Item 2</li>
                                <li>Item 3</li>
                                <li>Item 4</li>
                            </ul>
                        </div>
                     </div>
                 </div>
             </div>
         </footer>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('js/general.js')}}" ></script> 
       </body>
</html>