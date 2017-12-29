<nav class="navbar navbar-default menu-header">
    <div class="container">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">STORE</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('carrinho')}}">carrinho<i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge">42</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Álvaro Ferreira <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Meu perfil</a></li>
                            <li><a href="#">Minha senha</a></li>
                            <li><a href="#">Meus Pedidos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>