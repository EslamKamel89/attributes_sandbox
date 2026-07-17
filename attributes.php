<?php

use App\DTO\UserRegistration;
use App\Validation\Validator;

require_once 'vendor/autoload.php';

$dto = new UserRegistration(
	'', 'not an email'
);
$validator = new Validator();
$validator->validate( $dto );
$errors = $validator->getErrors();
dd( $errors );