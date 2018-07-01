
        @extends('templates.homeTemplate')
        
        @section('content')
        <meta id="token" name="token" content="{{csrf_token()}}" >
        
        <div class="ico_nav"> ||| </div>
        <nav class="navbar nav_custom">
            <div class="sidenav" >
                <ul class="navbar-nav" id="leftbarItens">
                    <li class="nav-item nav-item-r"> <a class="nav-link dashboardClick" data-link="{{ route('dash') }}" id="geral"> GERAL </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link dashboardClick" id="blog" > BLOG </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link dashboardClick" id="products" > PRODUTOS </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link dashboardClick" id="settings"> CONFIGURAÇÕES </a> </li>
                    <li class="nav-item nav-item-r dropdown ">
                        <a class="nav-link dropdown-toggle dropdown-menu_custom" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-dropup-auto="false">
                          PRODUTOS
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">PRODUTO 1</a>
                          <a class="dropdown-item" href="#">PRODUTO 2</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">PRODUTO 3</a>
                        </div>
                    </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link"> MEU PERFIL </a> </li>
                    
                </ul>
            </div>
        </nav>
        
        <div class="container custom_section">
            <div class="col-md-12 dashLocation">
            </div>
        </div>
        
        @endsection