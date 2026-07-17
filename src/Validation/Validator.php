<?php
namespace App\Validation;

use App\Validation\Validators\ValidatorInterface;
use Attribute;
use ReflectionAttribute;
use ReflectionClass;
class Validator {
	private array $errors = [];
	public function validate( object $object ): void {
		$reflector = new ReflectionClass( $object );
		foreach ( $reflector->getProperties() as $property ) {
            /** @var ReflectionAttribute[] $attributes */
			$attributes = $property->getAttributes(ValidationRuleInterface::class , ReflectionAttribute::IS_INSTANCEOF);
            foreach($attributes as $attribute){
                /** @var ValidatorInterface $validator */
                $validator = $attribute->newInstance()->getValidator();
                if(!$validator->validate($property->getValue($object))){

                }
            }

		}
	}
	public function getErrors() {
		return $this->errors;
	}
}