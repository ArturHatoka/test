<?php
    require "includes/db.php";

    $data= $_POST;
    if( isset($data['do_signup']) )
    {
        //здесь регистрируем
        $errors = array();
        if (trim($data['login']) == '' )
        {
            $errors[] ='Введите login';
        }
        if (trim($data['email']) == '' )
        {
            $errors[] ='Введите email';
        }
        if ($data['password'] == '' )
        {
            $errors[] ='Введите password';
        }
        if ($data['password_2'] != $data['password'] )
        {
            $errors[] ='password_2 != password';
        }

        if (empty($errors))
        {
            //Все ок регаем
        }
        else
            {
                echo '<div id="errors">'.array_shift($errors).'</div><hr>';
            }

    }


?>

<form action="/signup.php" method="post">

    <p>
        <input type="text" name="login" placeholder="login">
    </p>
    <p>
        <input type="email" name="email" placeholder="email">
    </p>
    <p>
        <input type="password" name="password" placeholder="password">
    </p>
    <p>
        <input type="password" name="password_2" placeholder="password_2">
    </p>
    <p>
        <button type="submit" name="do_signup">Signup</button>
    </p>

</form>
