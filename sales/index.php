<?php
  require_once 'class/connection.php';
  $obj = new Connection();
  $connection = $obj -> establish();

  $sql = "SELECT from usuarios where email='admin'";
  $result = mysqli_query($connection, $sql);
  $validate = 0;

  if(mysqli_num_rows($result) > 0){ $validate = 1; }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap-4.4.1-dist/css/bootstrap.css">
    <script src="libraries/jquery-3.4.1.min.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body>
    <br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel panel-heading">
              Sales and warehouse system
            </div>
            <div class="panel panel-body">
              <p>
                <img src="img/sales_record.png" height="190">
              </p>
              <form id="frmLogin">
                <label>User</label>
                <input type="text" class="form-control input-sm" name="user" id="user">
                <label>Password</label>
                <input type="password" class="form-control input-sm" name="password" id="password">
                <p></p>
                <span class="btn btn-primary btn-sm" id="login">Login</span>
                <?php if(!$validar): ?>
                  <a href="record.php" class="btn btn-danger btn-sm">Register</a>
                <?php endif; ?>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </body>
</html>

<script type='text/javascript'>
$(document).ready(function(){
  $('#login').on('click', function(){
    let emptyFields = validateEmptyForm('frmLogin');
    
    if(emptyFields > 0) {
      alert('all the fields are required');
      return false;
    }

    let data = $('#frmLogin').serialize();
    $.ajax({
      type: 'POST',
      data: data,
      url: 'processes/regLogin/login.php',
      success: (result) => {
        if(result === 1) {
          window.location = 'views/inicio.php';
        } else {
          alert('could not connect to database');
        }
      }
    });
    
  });
});
</script>