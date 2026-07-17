<?php 

use App\DTO\UserRegistration;

require_once 'vendor/autoload.php';

$dto =new  UserRegistration(
    'Eslam' , 'admin@gmail.com'
);
dd($dto);