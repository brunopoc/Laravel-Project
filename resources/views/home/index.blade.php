
        @extends('templates.homeTemplate')
        
        @section('content')
        <section>
            <div class="row" id="searchhome" class="img-responsive">
                <div class="container" id="searchbar_Container">
                    <div class="row">
                        <form class="form-control form-small" id="form_search">
                            <div class="row" id="form_row" >
                            <div class="form-group col-md-11">
                            <input type="text" id="searchbar" class="form-control" placeholder="Pesquise seu Produto Aqui ..." />
                            </div>
                            <div class="col-md-1" >
                                <input type="submit" class="btn btn-primary float-right custom-pink-btn" value="Pesquisar"/>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="row bg-light" id="menuWhite">
            <nav class="navbar navbar-expand-lg navbar-light bg-light nav-center">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">EXEMPLOS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          PRODUTOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">PRODUTO 1</a>
                          <a class="dropdown-item" href="#">PRODUTO 2</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">PRODUTO 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SESSÃO</a>
                    </li>
                </ul>
            </nav>
        </div>
        <section>
            <div class="row wrapper">
                <div class="container horMenu">
                    <div class="col-xs-1 arrow" id="left-arrow" >&#x3008;</div>
                        <div class="col-xs-8 numWrap" id="numWrap" >
                             <div   class="strip" id="strip"></div>
                        </div>
                    <div class="col-xs-1 arrow"  id="right-arrow" >&#x3009;</div>
                </div>
            </div>

        </section>


        
        @endsection