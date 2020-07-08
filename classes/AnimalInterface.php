<?php

namespace classes;

/**
 * Interface AnimalInterface
 * @package classes
 */
interface AnimalInterface
{
    public const CLOSURE_EXAMPLE_TYPE_ONE = 1;

    public const CLOSURE_EXAMPLE_TYPES_MAP = [
        self::CLOSURE_EXAMPLE_TYPE_ONE => 'getExampleOne',
    ];

    public const ANIMAL_TYPE_DOG = 'dog';
    public const ANIMAL_TYPE_DEFAULT = self::ANIMAL_TYPE_DOG;

    public const ANIMAL_TYPES_MAP = [
        self::ANIMAL_TYPE_DOG,
    ];

    public const ANIMAL_TYPES_TO_BARKS_MAP = [
        self::ANIMAL_TYPE_DOG => [
            'wef wef',
            'wof wof',
            'gav gav',
        ],
    ];

    public const ANIMAL_BARK_DEFAULT_VALUE = [
        'silence',
    ];

    public const TYPE_OF_FOOD_PREDATOR = 1;
    public const TYPE_OF_FOOD_HERBIVOROUS = 2;

    public const TYPES_OF_FOOD_MAP = [
        self::TYPE_OF_FOOD_PREDATOR,
        self::TYPE_OF_FOOD_HERBIVOROUS,
    ];

    public const TYPES_OF_FOOD_NAMES_TRANSCRIPT = [
        self::TYPE_OF_FOOD_PREDATOR    => 'Meat',
        self::TYPE_OF_FOOD_HERBIVOROUS => 'Herbs',
    ];

    public function setAnimalType(string $animalType): void;

    public function getAnimalType(): string;
}