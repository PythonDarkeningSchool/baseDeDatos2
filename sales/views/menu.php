<!DOCTYPE html>
<html>
<head>
	<title>Sales and warehouse</title>
	<?php require_once "dependencies.php" ?>

</head>
<body>
  <div id='nav'>
		<div class='navbar navbar-inverse navbar-fixed-top' data-spy='affix' data-offset-top='100'>
		  <div class='navbar-header'>
        <button type='button' class='navbar-toggle collapsed' data-toggle='collapsed' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
          <span class='sr-only'>Toggle navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand' href='inicio.php'>
          <img class='img-responsive logo img-thumbnail' src='../img/sales_record.png' width='150px' height='150px'>
        </a>
      </div>
      <div id='navbar' class='collapse navbar-collapse'>
        <ul class='nav navbar-nav navbar-right'>
          <li class='active'>
            <a href='inicio.php'>
              <span class='glyphicon glyphicon-home'> </span>Start
            </a>
          </li>
          <li class='dropdown'>
            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
              <span class='glyphicon glyphicon-list-alt'>
                Manage Articles
              </span>
              <span class='caret'></span>
            </a>
            <ul>
              <li><a href='categories.php'>Categories</a></li>
              <li><a href='articles.php'>Articles</a></li>
            </ul>
          </li>

          <?php
            if($_SESSION['usuario'] == 'admin'):
          ?>
            <li>
              <a href='users.php'>
                <span class='glyphicon glyphicon-user'></span>Manage Users
              </a>
            </li>
          <?php endif; ?>
          <li>
            <a href='clients.php'>
              <span class='glyphicon glyphicon-user'></span> Clients
            </a>
          </li>
          <li>
            <a href='sales.php'>
              <span class='glyphicon glyphicon-usd'></span> Sell Article
            </a>
          </li>
        </ul>
      </div>

		</div>
	</div>
</body>