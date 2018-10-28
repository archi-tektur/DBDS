<?php

namespace DBLS\Model;


use DBLS\Interfaces\ValidateInterface;
use Exception;

class TrackObjectData extends Data implements ValidateInterface
{

    /**
     * @var int type ID
     */
    private $typeID;

    /**
     * @var int route ID
     */
    private $routeID;

    /**
     * @var string object name
     */
    private $name;

    /**
     * @var int object kilometer
     */
    private $kilometer;


    /**
     * Assigns values to class fields
     *
     * @param int $typeID
     * @param int $routeID
     * @param string $name
     * @param int $kilometer
     */
    public function __construct(int $typeID, int $routeID, string $name, int $kilometer)
    {
        $this->typeID = $typeID;
        $this->routeID = $routeID;
        $this->name = $name;
        $this->kilometer = $kilometer;
    }

    /**
     * Validates fully entered data
     *
     * @return bool true if everything went OK while verifying
     * @throws Exception when given data are not valid
     */
    public function validate(): bool
    {
        if (strlen($this->name) > 64) {
            throw new
        }
    }

    /**
     * @return int object type ID
     */
    public function getTypeID(): int
    {
        return $this->typeID;
    }

    /**
     * @return int route ID
     */
    public function getRouteID(): int
    {
        return $this->routeID;
    }

    /**
     * @return string object name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int object kilometer
     */
    public function getKilometer(): int
    {
        return $this->kilometer;
    }
}