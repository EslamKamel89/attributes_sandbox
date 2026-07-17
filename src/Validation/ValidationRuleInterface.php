<?php 
namespace App\Validation;

use App\Validation\Validators\ValidatorInterface;

interface ValidationRuleInterface {
    public function getValidator():ValidatorInterface;
}