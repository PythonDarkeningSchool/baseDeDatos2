<?php
  session_start();
  if(isset($_SESSION['usuario'])){
?>

    <!DOCTYPE html>
    <html>
      <head>
        <title>ventas</title>
        <?php require_once "menu.php"; ?>
      </head>
      <body>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <span class="btn btn-default" id="ventaProductosBtn">Vender productos</span>
              <span class="btn btn-default" id="ventaHechasBtn">Ventas hechas</span>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div id="ventaProductos"></div>
              <div id="ventasHechas"></div>
            </div>
          </div>
        </div>
      </body>
    </html>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#ventaProductosBtn').click(function(){
          esconderSeccionVenta();
          $('#ventasHechas').load('ventas/ventasDeProductos.php');
          $('#ventaProductos').show();
        });
        $('#ventaHechasBtn').click(function(){
          esconderSeccionVenta();
          $('#ventasHechas').load('ventas/ventasyReportes.php');
          $('#ventasHechas').show();
        });
      });

      function esconderSeccionVenta(){
        $('#ventasProductos').hide();
        $('#ventasHechas').hide();
      }
    </script>
    <?php
  } else {
    header('location: ../index.php');
  }
?>