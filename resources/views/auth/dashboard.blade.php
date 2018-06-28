
        @extends('templates.homeTemplate')
        
        @section('content')
        <div class="ico_nav"> ||| </div>
        <nav class="navbar nav_custom">
            <div class="sidenav" >
                <ul class="navbar-nav" id="leftbarItens">
                    <li class="nav-item nav-item-r"> <a class="nav-link"> DASHBOARD </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link"> DASHBOARD </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link"> DASHBOARD </a> </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link"> DASHBOARD </a> </li>
                    <li class="nav-item nav-item-r dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          PRODUTOS
                        </a>
                        <div class="dropdown-menu dropdown-menu_custom" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">PRODUTO 1</a>
                          <a class="dropdown-item" href="#">PRODUTO 2</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">PRODUTO 3</a>
                        </div>
                    </li>
                    <li class="nav-item nav-item-r"> <a class="nav-link"> DASHBOARD </a> </li>
                    
                </ul>
            </div>
        </nav>
        
        <div class="container custom_section">
            <div class="col-md-12">
                Teste
            </div>
        </div>
        
        @endsection