<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helper.php';
function register_form_valid($form)
{
    foreach ($form as $value) {
        if (empty($value)) {
            return 'Please fill all place';
        }
    }
    $email = $form['email'];
    if (!filter_var($email)){
        return 'Please enter valid email';
    }
    $password1 = $form['password1'];
    $password2 = $form['password2'];
    if ($password2 != $password1) {
        return 'Config password not same';
    }

    return true;

}

/**
 * Created by PhpStorm.
 * User: nurkadyr
 * Date: 10/4/18
 * Time: 5:28 PM
 */
$con = mysqli_connect('localhost', 'root', 'root', 'test');
mysqli_set_charset($con, 'utf8');
if (mysqli_connect_errno()) {
    echo 'Error in db MySql ' . mysqli_connect_error();
    exit();
}

if (is_post()) {
    $form = $_POST;
    if(register_form_valid($form)){
        $password= password_hash($form['password1'], PASSWORD_DEFAULT);
        $email = $form['email'];
        $name = $form['name']
        $query = sprintf('INSERT INTO users (name,surname,email,password) VALUE (%s,%s,%s,%s,)');
        $result = mysqli_query($con, $query);
    }
}

require_once __DIR__ . '/view/register.view.php';