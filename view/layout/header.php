<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gerenciar  - Evandro Tessaro</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../../../js/add_cell.js"></script>
    <script type="text/javascript" src="../../../js/admin_products.js"></script>
    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/html5shiv.js"></script>


</head>
<body>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-md-12 collumn">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="../layout/index.php">Painel de Controle</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li style="margin-top:20px!important; color:lightgray " >
                            Seja bem-vindo, Admin.
                        </li>

                        <li style="margin-right:20px!important">
                            <a href="../index.php">Clique aqui para sair.</a>
                        </li>

                    </ul>
                </div>

            </nav>
        </div>
    </div>

    <!-- menu lateral da pagina-->
    <div class="row" style="margin-top:75px">
        <div class="col-md-3">
            <ul class="nav nav-stacked">
                <li>
                    <a href="../cardapio/index.php">
                        <span class="glyphicon glyphicon-list"></span>
                        Gerenciar Card&aacute;pio
                    </a>
                </li>

                <li>
                    <a href="../pedidos/index.php">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        Cadastro de Pedidos
                    </a>
                </li>
                <li>
                    <a href="../funcionarios/index.php">
                        <span class="glyphicon glyphicon glyphicon-wrench"></span>
                        gerenciar funcion&aacute;rio
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 well">



            <script type="text/javascript">
                function excluir_registro( e ){
                    if( !confirm('Deseja realmente excluir este registro?') )
                    {
                        if( window.event)
                            window.event.returnValue=false;
                        else
                            e.preventDefault();
                    }
                }
            </script>