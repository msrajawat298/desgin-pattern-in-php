## [The Liskov Substitution Principle (LSP)](https://youtu.be/YiSF6m3XzHM?si=kOMMniC9yk14zoEY)
- The Liskov Substitution Principle (LSP) states that objects of a superclass should be replaceable with objects of a subclass without affecting the correctness of the program. 
- In other words, a subclass should be able to substitute its superclass without altering the desirable properties of the program.

### let's simplify the example to better illustrate the Liskov Substitution Principle (LSP) in PHP.

```php
class Bird {
    public function fly() {
        return "Flying...";
    }
}

class Duck extends Bird {
    public function quack() {
        return "Quack! Quack!";
    }
}

class Sparrow extends Bird {
    public function chirp() {
        return "Chirp! Chirp!";
    }
}
```

- In this example, we have a `Bird` superclass with a `fly()` method. We also have two subclasses: `Duck` and `Sparrow`. 
- According to the Liskov Substitution Principle, instances of `Duck` and `Sparrow` should be substitutable for instances of `Bird` without affecting the correctness of the program. 
- However, if we try to use a `Duck` object in a context where a generic `Bird` object is expected, it may lead to unexpected behavior:

```php
function performFly(Bird $bird) {
    return $bird->fly();
}

$duck = new Duck();
echo performFly($duck);  // Output: "Flying..."
echo $duck->quack();     // Output: "Quack! Quack!"
```

The `performFly()` function expects a `Bird` object and calls its `fly()` method. When we pass a `Duck` object to this function, it works as expected because a duck is a bird and can fly.

However, if we try to do the same with a `Sparrow` object:

```php
$sparrow = new Sparrow();
echo performFly($sparrow);  // Output: "Flying..."
echo $sparrow->chirp();     // Output: "Chirp! Chirp!"
```

- Even though a sparrow can fly, it may not accurately represent the behavior of all birds. 
- For example, if a bird species incapable of flying were added to the system, it would break the Liskov Substitution Principle. 
- In summary, violating the LSP can lead to unexpected behavior when substituting subclasses for their superclasses. 
- It's crucial to design classes and inheritance hierarchies carefully to ensure adherence to this principle.

- To fix the violation of the Liskov Substitution Principle (LSP) in the given example, we need to ensure that subclasses behave in a manner consistent with the superclass. 
- One way to achieve this is by restructuring the classes to better reflect the behavior of the objects they represent.
- In this case, we can separate the behaviors of flying and quacking into distinct interfaces, and then implement those interfaces in the appropriate subclasses. 
- This way, each subclass only implements the behaviors that are relevant to it. 
- Let's modify the example accordingly:

```php
interface Flyable {
    public function fly();
}

interface Quackable {
    public function quack();
}

class Bird implements Flyable {
    public function fly() {
        return "Flying...";
    }
}

class Duck extends Bird implements Quackable {
    public function quack() {
        return "Quack! Quack!";
    }
}

class Sparrow extends Bird {
    // Sparrows can fly, but they don't quack.
}
```

- Now, with this refactored structure, instances of `Duck` and `Sparrow` can still be substitutable for instances of `Bird` without affecting the correctness of the program. 

```php
function performFly(Flyable $bird) {
    return $bird->fly();
}

$duck = new Duck();
echo performFly($duck);  // Output: "Flying..."
echo $duck->quack();     // Output: "Quack! Quack!"

$sparrow = new Sparrow();
echo performFly($sparrow);  // Output: "Flying..."
```

- By separating behaviors into interfaces and implementing them selectively in subclasses, we ensure that each subclass only provides the behaviors it supports, thus adhering to the Liskov Substitution Principle. This approach also promotes better code organization and flexibility, as new behaviors can be added without affecting unrelated classes.