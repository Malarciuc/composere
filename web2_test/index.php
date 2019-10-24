<?php


require "vendor/autoload.php";

$v = new Valitron\Validator($_POST);
    $v ->rule('required', ['name', 'email', 'password', 'confirm_password']);
    $v ->rule('equals', ['password', 'confirm_password']);
    $v ->rule('numeric',['age']);
    $v ->rule('lengthMin',['name',3]);
    $v ->rule('email',['email']);
    $v ->rule('date',['birthdate']);
    $v ->rule('min',['age',1]);
    $v ->rule('max',['age',100]);



?>
<form method="POST">
    Name:<input type="text" name="name"><br>
    Email:<input type="text" name="email"><br>
    Phone:<input type="text" name="phone"><br>
    Age:<input type="number" name="age"><br>
    Password:<input type="password" name="password"><br>
    Confirm password:<input type="password" name="confirm_password"><br>
    birthdate:<input type="date" name="birthdate"><br>
    <input type="submit" value="submit">
</form>
<?php
if($v->validate()) {
    echo "Succesful";
} else {

    foreach ($v->errors() as $eroare) {
        ?> <br> <?
        foreach ($eroare as $text) {
            echo $text;
        }
    }

}
?>

