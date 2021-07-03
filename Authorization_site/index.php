<!DOCTYPE html>
<html lang="">
 <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href ="assets/css/style.css">
    <title> Document </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 </head>
 <body>
     <div class="container mt-4">
       <?php
          if($_COOKIE['user'] == ''):
        ?>
         <div class = "row">
             <div class ="col">
             <h1> Форма регистрации </h1><br>
                <form action="check.php" method="post">
                 <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
                 <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" required><br>
                 <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required><br>
                 <button type= "submit" class = "btn btn-success">Зарегестрироваться</button>
                </form>
             </div>
             <div class = "col">
             <h1> Форма авторизации </h1><br>
         <form action="auth.php" method="post">
             <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" required><br>
             <input type="text" class="form-control" name="pass" id="pass" placeholder="Введите пароль" required><br>
             <button type= "submit" class = "btn btn-success">Авторизоваться</button>
        </form>
             </div>
         </div>
       <?php else:?>
         <p> Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>. <p>
       <?php endif;?>

     </div>

 </body>
</html>
