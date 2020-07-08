<?php

use classes\Animals;

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
