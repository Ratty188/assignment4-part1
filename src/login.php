<html>
<?php
//if logout is passed as parameter in URL then end session.
if(isset($_GET['logout'])){
	session_start();
	session_destroy();
}
?>


  <head>
    <meta charset='utf-8'>
      <title>Login Inputs</title>
    </head>

  <body>
    <form action = "content1.php" method="post">

      <table border = "0">

        <tr>
          <td>Username<td/>
            <td align = "center">
              <input type = "text" name = "username"/>
            </td>
          </tr>

        <tr>
          <td>
            <input type = "submit" value = "Login"/>
          </td>
        </tr>
        
      </form>
    </body>
  </html>
