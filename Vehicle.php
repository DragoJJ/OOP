<?php

class Vehicle {
    private int $numberOfWheels;
    private string $brand;
    private string $color;
    private int $numberOfSeats;
    private bool $isTankEmpty;
    private bool $isStarted;

    /**
     * @return int
     */
    public function getNumberOfWheels(): int
    {
        return $this->numberOfWheels;
    }

    /**
     * @param int $numberOfWheels
     */
    public function setNumberOfWheels(int $numberOfWheels): void
    {
        $this->numberOfWheels = $numberOfWheels;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    /**
     * @param int $numberOfSeats
     */
    public function setNumberOfSeats(int $numberOfSeats): void
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    /**
     * @return bool
     */
    public function isTankEmpty(): bool
    {
        return $this->isTankEmpty;
    }

    /**
     * @param bool $isTankEmpty
     */
    public function setIsTankEmpty(bool $isTankEmpty): void
    {
        $this->isTankEmpty = $isTankEmpty;
    }

    /**
     * @return bool
     */
    public function isStarted(): bool
    {
        return $this->isStarted;
    }

    /**
     * @param bool $isStarted
     */
    public function setIsStarted(bool $isStarted): void
    {
        $this->isStarted = $isStarted;
    }


    function start($isTankEmpty,$isStarted){
        if($isTankEmpty===true ){
            echo "The vehicle is not possible to turn on";
        }
        elseif ($isStarted===true){
            echo "The vehicle is already started";
        }
        else{
            $isStarted=true;
            echo "Vehicle is started successfully";
        }

    }
    function stop($isStarted){
         if($isStarted===false){
             echo "The vehicle is stoped";
         }
         else{
             $isStarted=true;
             echo "The vehicle is started";
         }
    }

}