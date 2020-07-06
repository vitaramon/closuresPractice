<?php

include 'classes/Animals.php';

$animals = [
		'dog'  => [
				'bark' => 'gav gavich',
			],
	];

$model = new Animals();

$model->setAnimalType(Animals::ANIMAL_TYPE_DOG);
$testResult = $model->checkClosuresInWork(Animals::CLOSURE_EXAMPLE_TYPE_ONE);

var_dump($testResult);
