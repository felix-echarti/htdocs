<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 5 || mb_strlen($login) > 25){
        echo "Недопустимая длина логина";
        exit();
    }
    else if(mb_strlen($name) < 2 || mb_strlen($name) > 30){
        echo "Недопустимое имя";
        exit();
    }
    else if(mb_strlen($pass) < 8 || mb_strlen($pass) > 50){
        echo "Недопустимый пароль";
        exit();
    }

    $pass = md5($pass."qwpdn58rtn");

    $mysql = new mysqli('localhost','root','root','registraion-db');
    $mysql->query("INSERT INTO `users` (`pass`, `login`, `name`) VALUES('$pass', '$login', '$name')");

    $mysql->close();
    header('location: /');
?>
