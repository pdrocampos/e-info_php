<?php 

require 'db.php';

if(isset($_POST['save'])){
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'course' => $_POST['course'],
    ];

    $db->put($data);
    header('Location: index.php');

}