## [Open/Closed Principle (OCP)](https://youtu.be/5nftPpufUl4?si=X8PKQOY3UcYLoDo9)
- The Open/Closed Principle (OCP) emphasizes designing code that is open for extension but closed for modification. 
- In other words, the behavior of a module should be extendable without modifying its source code.
- The key advantage of applying OCP lies in its ability to make the code more flexible and extensible. 
- By using mechanisms such as inheritance, polymorphism, and inversion of control, we can add new features without impacting the existing code. 
- It also facilitates unit testing, as existing features are not altered when introducing new ones.
- For example, in a payment processing application, we can have a generic abstract class for payment methods, such as “PaymentMethod.” 
- let's demonstrate an issue where the code violates the Open/Closed Principle (OCP) by requiring modification of existing code to add new functionality.
Sure, let's demonstrate an issue where the code violates the Open/Closed Principle (OCP) by requiring modification of existing code to add new functionality.

Suppose we have the same example as before, but instead of using interfaces and polymorphism, we directly check the type of shape in the `AreaCalculator` class:

```php
class Rectangle {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class AreaCalculator {
    public function calculate($shape) {
        if ($shape instanceof Rectangle) {
            return $shape->area();
        } elseif ($shape instanceof Circle) {
            return $shape->area();
        } else {
            throw new Exception("Unsupported shape type.");
        }
    }
}
```

- Now, let's say we want to add a new shape, such as a triangle. We would need to modify the `AreaCalculator` class to accommodate the new shape:

```php
class Triangle {
    protected $base;
    protected $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function area() {
        return 0.5 * $this->base * $this->height;
    }
}

class AreaCalculator {
    public function calculate($shape) {
        if ($shape instanceof Rectangle) {
            return $shape->area();
        } elseif ($shape instanceof Circle) {
            return $shape->area();
        } elseif ($shape instanceof Triangle) { // Modification needed
            return $shape->area();
        } else {
            throw new Exception("Unsupported shape type.");
        }
    }
}
```

This violates the Open/Closed Principle because every time we want to add a new shape, we have to modify the existing `AreaCalculator` class. This approach leads to code that is more fragile and harder to maintain, especially as the number of shapes increases. It's better to use polymorphism and interface-based design to adhere to the Open/Closed Principle.

- Solution Here's an example in PHP demonstrating how to adhere to the Open/Closed Principle using inheritance and polymorphism:

```php
interface Shape {
    public function area();
}

class Rectangle implements Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

class Circle implements Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class AreaCalculator {
    public function calculate(Shape $shape) {
        return $shape->area();
    }
}
```
In this example, we have a Shape interface defining a method area(), which calculates the area of a shape. We then have two concrete implementations of this interface: Rectangle and Circle.

Now, let's say we want to add a new shape, such as a triangle, without modifying the existing code. We can simply create a new class implementing the Shape interface: