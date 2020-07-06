<?php

/**
 * Interface AnimalInterface
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
        'silence'
    ];

    public function setAnimalType(string $animalType): void;
    public function getAnimalType(): string;
}