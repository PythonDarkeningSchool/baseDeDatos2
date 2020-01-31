<!DOCTYPE html>
<html>
  <head>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap-4.4.1-dist/css/bootstrap.css">
    <script src="libraries/jquery-3.4.1.min.js"></script>
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
                <a href="record.php" class="btn btn-danger btn-sm">Register</a>              
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
  </body>
</html>