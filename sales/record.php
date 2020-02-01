<?php
  require_once 'class/connection.php';
  $obj = new Connection();
  $connection = $obj -> establish();

  $sql = "SELECT from usuarios where email='admin'";
  $result = mysqli_query($connection, $sql);
  $validate = 0;

  if(mysqli_num_rows($result) > 0){  header('location:index.php'); }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Record</title>
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <script src="librerias/jquery-3.2.1.min.js"></script>
    <script src="js/functions.js"></script>
  </head>
  <body style="background-color: gray">
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="panel panel-danger">
              <div class="panel panel-heading">Register an administrator</div>
              <div class="panel panel-body">
                <form id="frmRegistro">
                  <label>Name</label>
                  <input type="text" class="form-control input-sm" name="name" id="name">
                  <label>Last Name</label>
                  <input type="text" class="form-control input-sm" name="last-name" id="last-name">
                  <label>User</label>
                  <input type="text" class="form-control input-sm" name="user" id="user">
                  <label>Password</label>
                  <input type="text" class="form-control input-sm" name="password" id="password">
                  <p></p>
                  <span class="btn btn-primary" id="register">Register</span>
                  <a href="index.php" class="btn btn-default">Back to login</a>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-4"></div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#register').on('click', function(){
      let emptyFields = validateEmptyForm('frmRegistro');

      if(emptyFields > 0) {
        alert('All fields are required');
        return false;
      }

      data=$('#frmRegistro').serialize();

      $.ajax({
        type: 'POST',
        data: data,
        url: '../processes/regLogin/registerUser.php',
        success: function(result){
          alert(result);

          if(result === 1){
            alert('Record successfully added');
          } else { 
            alert('could not add record');
          }
        }
      });
    });
  });
</script>