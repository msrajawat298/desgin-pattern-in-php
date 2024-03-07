## [Interface Segregation Principle (ISP)](https://youtu.be/Kv7Twu66LuM?si=27J0_vWXjZMqlLSM)
- The Interface Segregation (ISP) states that a class should not be forced to implement interfaces that it does not use.
- It is better to have multiple smaller interfaces than larger interfaces.

### Let's illustrate the Interface Segregation Principle with a PHP example:

- Suppose we have an interface called `Worker` that represents different types of workers, such as `Worker` and `Manager`. 
- Each worker may have different responsibilities, such as working and managing.

```php
interface Worker {
    public function work();
    public function manage();
}
```

- Now, imagine we have a class called `Programmer` that implements the `Worker` interface:

```php
class Programmer implements Worker {
    public function work() {
        return "Coding...";
    }
    
    public function manage() {
        // Programmer doesn't manage other workers.
        return null;
    }
}
```

- In this example, the `Programmer` class implements both the `work()` and `manage()` methods of the `Worker` interface. 
- However, not all workers, such as programmers, may have managerial responsibilities. 
- This violates the Interface Segregation Principle because the `Programmer` class is forced to implement a method it doesn't need.

- To adhere to the Interface Segregation Principle, we should split the `Worker` interface into more specific interfaces based on the responsibilities:

```php
interface Workable {
    public function work();
}

interface Manageable {
    public function manage();
}
```

- Now, the `Programmer` class can implement only the `Workable` interface, and other classes, such as `Manager`, can implement the `Manageable` interface. This way, each class depends only on the interfaces it uses, promoting better separation of concerns and adherence to the Interface Segregation Principle:

```php
class Programmer implements Workable {
    public function work() {
        return "Coding...";
    }
}

class Manager implements Manageable {
    public function manage() {
        return "Managing...";
    }
}
```

- By following this approach, we ensure that interfaces are more specific to the requirements of the classes that use them, leading to more flexible and maintainable code.