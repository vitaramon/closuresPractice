<?php

use classes\AnimalInterface;
use classes\Animals;

require 'vendor/autoload.php';

/**
 * @deprecated, using autoloading by composer instead, commented as deafult autoloading example
 * Simple testing of autoloading classes without Composer
 */
if (false) {
    spl_autoload_register(function ($className) {
        $className = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        try {
            include $className;
        } catch (Exception $e) {
            $errorMsg = 'Failed to include class '
                . $className
                . PHP_EOL;
            throw new Exception($errorMsg);
        }
    });
}

/** First example - simple using closure */
$model = new Animals();
$model->setAnimalType(Animals::ANIMAL_TYPE_DOG);
$testResultFirst = $model->checkClosuresInWork(Animals::CLOSURE_EXAMPLE_TYPE_ONE);

foreach ($testResultFirst as $resultRow) {
    echo $resultRow . PHP_EOL;
}

/** Second example - using BindTo */
$customClosure = function () {
    echo $this->getAnimalType() . PHP_EOL;
};

$newAnimal = new Animals();
$newCustomClosure = $customClosure->bindTo($newAnimal);
$newCustomClosure();

/** Simple example of traits using */
$newAnimal->typeOfFood = AnimalInterface::TYPE_OF_FOOD_PREDATOR;
$newAnimal->sayWhatItEat();

