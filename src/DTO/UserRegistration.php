<?php 
namespace App\DTO ;
readonly class UserRegistration {
    public function __construct(
        public string $username  ,
        public string $email ,
    ){}
}