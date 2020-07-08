<?php

namespace classes;

use Exception;

/**
 * Class Animals
 * @package classes
 */
class Animals implements AnimalInterface
{
    /**
     * @var string
     */
    private $animalType = self::ANIMAL_TYPE_DEFAULT;

    /**
     * @param string $animalType
     * @throws Exception
     */
    public function setAnimalType(string $animalType): void
    {
        if (!in_array($animalType, self::ANIMAL_TYPES_MAP)) {
            $errorMsg = 'Entered name doesn\'t exist';
            throw new Exception($errorMsg);
        }

        $this->animalType = $animalType;
    }

    /**
     * @return string
     */
    public function getAnimalType(): string
    {
        return $this->animalType;
    }

    /**
     * @return string[]
     */
    private function getBarkForCurrentAnimal(): array
    {
        if (!in_array($this->animalType, array_keys(self::ANIMAL_TYPES_TO_BARKS_MAP))) {
            return self::ANIMAL_BARK_DEFAULT_VALUE;
        }

        return self::ANIMAL_TYPES_TO_BARKS_MAP[$this->animalType];
    }

    /**
     * @param $exampleType
     * @return array
     * @throws Exception
     */
    public function checkClosuresInWork($exampleType): array
    {
        if (!in_array($exampleType, array_keys(self::CLOSURE_EXAMPLE_TYPES_MAP))) {
            $errorMsg = 'Example of this type doesn\'t exist';
            throw new Exception($errorMsg);
        }

        $result = [];

        foreach (self::CLOSURE_EXAMPLE_TYPES_MAP as $key => $functionName) {
            if ($key === $exampleType) {
                $result = $this->getResultByFunctionName($functionName);
            }
        }

        if (!$result) {
            $errorMsg = 'Final result is empty';
            throw new Exception($errorMsg);
        }

        return $result;
    }

    /**
     * @param string $functionName
     * @return array
     * @throws Exception
     */
    private function getResultByFunctionName(string $functionName): array
    {
        $result = [];

        try {
            $result = $this->$functionName();
        } catch (Exception $e) {
            $errorMsg = 'Incorrect function name in closures examples map';
            throw new Exception($errorMsg);
        }

        return $result;
    }

    /**
     * @return array
     */
    private function getExampleOne(): array
    {
        $result = [];

        $animalBarkCallback = function (string $animalBark) use (&$result) {
            $result[] = 'Current animal says: ' . $animalBark;
        };

        $barksArray = $this->getBarkForCurrentAnimal();
        array_walk($barksArray, $animalBarkCallback);

        return $result;
    }
}
