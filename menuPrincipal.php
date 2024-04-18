<div class="nav-wrapper"> <!-- Esse é o 1 nivel ou o nivel principal -->
    <a href="#" class="brand-logo left-align"> <img width="100" height="90" src="./img/logo.png" alt="logotipo" id="imagem"> </a>
    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <ul style="height: 100px;" class="right hide-on-med-and-down right align valign-wrapper">

        <li><a href="cadPesquisa.php">Pesquisa</a></li>

        <li><a href="cadProduto.php">Produtos
            <li><a class="dropdown-trigger" data-target="dropdown1"><i class="material-icons">arrow_drop_down</i></a></a>
                <ul id="dropdown1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                    <li><a href="relProdutos.php">Relatório</a></li>
                </ul>
            </li>
        </li>

        <li><a href="cadDepartamentos.php">Departamentos</a>
            <li><a class="dropdown-trigger" data-target="dropdown2"><i class="material-icons">arrow_drop_down</i></a>
                <ul id="dropdown2" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                    <li><a href="relDepartamentos.php">Relatório</a></li>
                </ul>
            </li>
        </li>
            
        <li><a href="cadTipoComercio.php">Comércio</a>
            <li> <a class="dropdown-trigger" data-target="dropdown3"><i class="material-icons">arrow_drop_down</i></a> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                <ul id="dropdown3" class="dropdown-content">
                    <li><a href="relTipoComercios.php">Relatório</a></li>
                </ul>
            </li>
        </li>

        <li><a href="cadEstagiario.php">Estagiário</a></li>
            <li><a class="dropdown-trigger" data-target="dropdown4"><i class="material-icons">arrow_drop_down</i></a></li>
                <ul id="dropdown4" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                    <li><a href="relEstagiarios.php">Relatório</a></li> 
                </ul>

        <li><a href="cadUnidadeMedida.php">Unidade Medida</a></li>
            <li><a class="dropdown-trigger" data-target="dropdown5"><i class="material-icons">arrow_drop_down</i></a></li>
            <ul id="dropdown5" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                <li><a href="relUnidadeMedidas.php">Relatório</a></li>
            </ul>

        <li><a class="btn" href="index.php">Logout</a></li>
        </ul>

        </div>

        <ul class="sidenav" id="mobile-demo">
        <li><a href="cadLocalPesquisa.php">Pesquisa</a></li>

        <li><a href="cadProdutos.php">Produtos
            <i class="dropdown-trigger right" data-target="dropdown1_1"> <i class="material-icons">arrow_drop_down</i></i>
        </a>
        <ul id="dropdown1_1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="relProdutos.php">Relatório</a></li>
        </ul>
        </li>

        <li><a href="cadDepartamentos.php">Departamentos
            <i class="dropdown-trigger right" data-target="dropdown2_1"><i class="material-icons">arrow_drop_down</i></i>
        </a>
        <ul id="dropdown2_1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="relDepartamentos.php">Relatório</a></li>
        </ul>
        </li>

        <li><a href="cadTipoComercio.php">Comércio
            <i class="dropdown-trigger right" data-target="dropdown3_1"><i class="material-icons">arrow_drop_down</i></i>
        </a>
        <ul id="dropdown3_1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="relTipoComercios.php">Relatório</a></li>
        </ul>
        </li>

        <li><a href="cadEstagiario.php">Estagiário
        <i class="dropdown-trigger right" data-target="dropdown4_1"><i class="material-icons">arrow_drop_down</i></i>
        </a>
        <ul id="dropdown4_1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="relEstagiarios.php">Relatório</a></li>
        </ul>
        </li>

        <li><a href="cadUnidadeMedida.php">Unidade Medida
        <i class="dropdown-trigger right" data-target="dropdown5_1"><i class="material-icons">arrow_drop_down</i></i>
        </a>
        <ul id="dropdown5_1" class="dropdown-content"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
            <li><a href="relUnidadeMedidas.php">Relatório</a></li>
        </ul>
        </li>

        <li><a class="btn" href="index.php">Logout</a></li> 
    </ul>     
</div>
