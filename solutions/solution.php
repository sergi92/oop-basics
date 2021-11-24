<?php
//Base class
class Animal
{
    //properties
    public $age;
    public $fur;
    public $vertebrate;
    public $type;
    //Constructor
    public function __construct($age, $fur, $vertebrate, $type)
    {
        $this->age = $age;
    }
    //Destructor
    public function __destruct()
    {
        echo "Destroying Animal";
    }
    //Other Methods
    public function breath()
    {
        echo "Breathing";
    }
    public function move()
    {
        echo "moving";
    }
    public function sound()
    {
        echo "something";
    }
}

//Child class
class Dog extends Animal
{
    //properties
    public $age;
    public $fur;
    public $vertebrate;
    public $type = "Dog";
    static $number_of_dogs = 1;

    //Constructor
    public function __construct($name, $breed, $color)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->color = $color;
    }
    //Other Methods
    public function sound()
    {
        echo "Woof";
    }
    public function bite()
    {
        echo "biting";
    }
}

//abstract class
abstract class LifeBeing
{
    //properties
    public $age;
    public $fur;
    public $vertebrate;
    public $type;
    //Constructor
    public function __construct($age, $fur, $vertebrate, $type)
    {
        $this->age = $age;
    }
    //Destructor
    public function __destruct()
    {
        echo "Destroying life being";
    }
    //Other Methods
    public function breath()
    {
        echo "Breathing";
    }
    public function move()
    {
        echo "moving";
    }
    public function sound()
    {
        echo "something";
    }
}

// dog interface
interface DogInterface
{
    public function bite();
    public function sound();
}
