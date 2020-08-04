<?php 
    require_once 'config.php';

    if(isset($_POST['firstname']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['password_confirm']));
    {
        $firstname = htmlspecialchars($_POST['firstname']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $mail = htmlspecialchars($_POST['mail']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $name = htmlspecialchars($_POST['name']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $phone = htmlspecialchars($_POST['phone']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $password = htmlspecialchars($_POST['password']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $passwordConfirm = htmlspecialchars($_POST['passwordConfirm']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $adress = htmlspecialchars($_POST['adress']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $city = htmlspecialchars($_POST['city']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $cityNumber = htmlspecialchars($_POST['cityNumber']);
        $ip = $_SERVER['REMOTE_ADDR'];

        $check = $bdd->prepare('SELECT firstname, mail, phone, password, adress, city, cityNumber FROM utilsateurs WHERE mail = ?');
        $check->execute(array($mail));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            if(strlen($firstname) <= 100){
                if(strlen($mail) <= 100){
                    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                        if($password == $passwordConfirm){

                            $password = hash('sha256', $password);
                            $ip = $_SERVER['REMOTE_ADDR'];

                            
                            $insert = $bdd->prepare('INSERT INTO utilsateurs(firstname, name, mail, phone, password, adress, city, cityNumber, ip) VALUES(:firstname, :name, :mail, :phone, :password, :adress, :city, :cityNumber, :ip)');
            
                            $insert->execute(array(

                                'firstname' => $firstname,
                                'name' => $name,
                                'mail' => $mail,
                                'phone' => $phone,
                                'password' => $password,
                                'adress' => $adress,
                                'city' => $city,
                                'cityNumber' => $cityNumber,
                                'ip' => $ip
                            ));

                            header('Location:login.php?reg_err=success');
                            die();
                        }else {header('Location: login.php?reg_err=password'); die();}
                    }else {header('Location: login.php?reg_err=email'); die();}
                }else {header('Location: login.php?reg_err=email_length'); die();}
            }else {header('Location: login.php?reg_err=firstname_length'); die();}
        }else {header('Location: login.php?reg_err=already'); die();}
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Bienvenue</h1>
    </body>
    </html>