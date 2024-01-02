* The factory design pattern is a creational pattern that defines an interface for creating objects.
* It allows subclasses to decide which class to instantiate.
* The factory design pattern is also known as the Factory Method Pattern or Virtual Constructor.
* It's used when a superclass has multiple subclasses, and based on input, one of the subclasses needs to be returned.
* The factory design pattern simplifies the process of creating objects by encapsulating object creation and providing a simple interface for the client to use.
* It promotes loose coupling between classes and promotes code reuse.
* Reference Link : https://refactoring.guru/design-patterns/factory-method

```php
<?php

// Interface for the product
interface Car {
    public function start();
}

// Concrete implementation of the product
class Sedan implements Car {
    public function start() {
        echo "Sedan car started.\n";
    }
}

// Another concrete implementation of the product
class SUV implements Car {
    public function start() {
        echo "SUV car started.\n";
    }
}

// Factory interface
interface CarFactory {
    public function createCar(): Car;
}

// Concrete implementation of the factory for Sedan
class SedanFactory implements CarFactory {
    public function createCar(): Car {
        return new Sedan();
    }
}

// Concrete implementation of the factory for SUV
class SUVFactory implements CarFactory {
    public function createCar(): Car {
        return new SUV();
    }
}

// Client code
$sedanFactory = new SedanFactory();
$sedanCar = $sedanFactory->createCar();
$sedanCar->start();

$suvFactory = new SUVFactory();
$suvCar = $suvFactory->createCar();
$suvCar->start();

?>
```