<!DOCTYPE html>
<html>
  <style type="text/css">
    *{
      margin:0;
      padding:0;
    }

    body{
      background:#567;
      font-family:'Open Sans',sans-serif;
    }

    .form{
      background:#f0f0f0;
      padding:6% 4%;
    }

    .login{
        width:400px;
        margin:0 auto;
        margin-top:8px;
        margin-bottom:2%;
        transition:opacity 1s;
        -webkit-transition:opacity 1s;
    }

    .triangle{
      width:0;
      border-top:12x solid transparent;
      border-right:12px solid transparent;
      border-bottom:12px solid #3399cc;
      border-left:12px solid transparent;
      margin:0 auto;
    }

    .login h1{
      background:#3399cc;
      padding:20px 0;
      font-size:140%;
      font-weight:300;
      text-align:center;
      color:#fff;
    }

    .name{
      width:92%;
      background:#fff;
      margin-bottom:4%;
      border:1px solid #ccc;
      padding:4%;
      font-family:'Open Sans',sans-serif;
      font-size:95%;
      color:#555;
    }

    .button_submit{
      width:100%;
      background:#3399cc;
      border:0;
      padding:4%;
      font-family:'Open Sans',sans-serif;
      font-size:100%;
      color:#fff;
      cursor:pointer;
      transition:background .3s;
      -webkit-transition:background .3s;
    }

  </style>
    <head>
      <meta charset="UTF-8">
      <title>Login Form</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

  <body>
        <div class="login">
          <div class="triangle"></div>
            <h1>Log In</h1>
      <form class="form" method="post" action="http://localhost/codeigniter/index.php/user/login">
        <input type="text" name="user_name" id="user_name" placeholder="Username" class="name"/>
        <input type="password" name="user_password" id="user_password" placeholder="Password" class="name" />
        <input type="submit" name="user_login"  id="user_login" value="Log In" class="button_submit">
      </form>
        </div>
  </body>
</html>