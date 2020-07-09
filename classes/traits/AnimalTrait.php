<?php

namespace classes\traits;

use classes\AnimalInterface;
use Exception;

/**
 * @property  int $typeOfFood
 *
 * Trait AnimalTrait
 * @package classes\traits
 */
trait AnimalTrait
{
    /**
     * @throws Exception
     * @return void
     */
    public function sayWhatItEat(): void
    {
        $typeOfFood = isset(AnimalInterface::TYPES_OF_FOOD_NAMES_TRANSCRIPT[$this->typeOfFood])
            ? AnimalInterface::TYPES_OF_FOOD_NAMES_TRANSCRIPT[$this->typeOfFood]
            : null;

        if (!$typeOfFood) {
            $errorMsg = 'Failed to find food for current animal';
            throw new Exception($errorMsg);
        }

        echo 'This animal eat: '
            . $typeOfFood
            . PHP_EOL;
    }
}
