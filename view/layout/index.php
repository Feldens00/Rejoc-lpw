
<?php include "header.php";
      require_once "../../../model/PedidosModel.php";
      require_once "../../../model/CardapioModel.php";
?>



<div class="col-md-9">

<h3 style="text-align: center; margin-bottom:30px">Dashboard</h3>

    <div class="col-lg-12">
    <div class="col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Ultimos Pedidos</h3>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Mesa</th>
                        <th>Preço total</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                        $obj = new PedidosModel();
                        $pedidos = $obj->getAllPedidos();
                        $precoTotal = 0;

                        foreach($pedidos as $pedido){

                            $class = "active";
                            switch($pedido['status']){

                                case "Pedido em Espera":
                                    $class = "warning";
                                    break;
                                case "Pedido Realizado":
                                    $class = "info";
                                    break;
                                case "Pedido Entregue":
                                    $class = "danger";
                                    break;
                                case "Pedido Pago":
                                    $class = "success";
                                    break;
                            }

                            $items = $obj->getAllItensPedido($pedido['id_pedido']);
                            $precoTotal = 0;
                            foreach($items as $item){

                                $cardapioModel = new CardapioModel();
                                $prato         = $cardapioModel->get($item['id_cardapio']);
                                $preco         = $prato['price'] * $item['quantidade'];
                                $precoTotal    = $precoTotal + $preco;

                            }


                            echo '<tr class='. $class . '>';
                            echo '<td>' . $pedido['id_pedido'] . '</td>';
                            echo '<td>' . $pedido['mesa'] . '</td>';
                            echo '<td>' . $precoTotal . '</td>';
                            echo '<td>' . $pedido['status'] . '</td>';
                            echo '<td>';
                            echo '</tr>';
                            echo '</td>';
                        }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Ultimas novidades no cardápio</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                Nome Produto
                            </th>
                            <th>
                                Preço unitario
                            </th>
                            <th>
                                Descrição
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                            $obj = new CardapioModel();
                           $cardapio = $obj->getAll();

                            foreach($cardapio as $pratos){

                                echo '<tr>';
                                echo '<td>'. $pratos['id_cardapio'] . '</td>';
                                echo '<td>'. $pratos['name'] .        '</td>';
                                echo '<td>'. $pratos['price'].        '</td>';
                                echo '<td>'. $pratos['description'].  '</td>';
                                echo '</td>';
                                echo '</tr>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>