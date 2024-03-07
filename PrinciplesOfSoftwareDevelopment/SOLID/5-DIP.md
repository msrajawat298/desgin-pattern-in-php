## [Dependency Inversion Principle (DIP)](https://youtu.be/8M7pLjacCPI?si=dDhJ7G0fQxZBAeSC)
- The Dependency Inversion Principle (DIP) states that high-level class should not depend on low-level class, but both should depend on abstractions. 
- In other words, the principle encourages decoupling between class by introducing interfaces or abstract classes that define contracts for interaction, allowing for flexibility and easier maintenance.

- Let's illustrate the Dependency Inversion Principle with a PHP example:
- Suppose we have a high-level class called `UserRepository` responsible for managing user data in a database. 
- Initially, it directly depends on a low-level class, such as a `MySQLDatabase` class, to perform database operations:

```php
class UserRepository {
    private $database;

    public function __construct(MySQLDatabase $database) {
        $this->database = $database;
    }

    public function getUser($userId) {
        return $this->database->query("SELECT * FROM users WHERE id = $userId");
    }

    // Other methods to interact with the database
}

class MySQLDatabase {
    public function query($sql) {
        // Implementation to execute the SQL query
    }
}
```

- In this example, the `UserRepository` class directly depends on the concrete implementation of the `MySQLDatabase` class, violating the Dependency Inversion Principle. 
- If we later decide to switch to a different database system, such as PostgreSQL, we would need to modify the `UserRepository` class.
- To adhere to the Dependency Inversion Principle, we can introduce an abstraction, such as an interface, to define the contract for database operations:

```php
interface Database {
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function query($sql) {
        // Implementation for MySQL database
    }
}

class UserRepository {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUser($userId) {
        return $this->database->query("SELECT * FROM users WHERE id = $userId");
    }

    // Other methods to interact with the database
}
```

- Now, the `UserRepository` class depends on the `Database` interface instead of the concrete implementation of the database. This allows us to easily switch to a different database system by implementing the `Database` interface for that system, without modifying the `UserRepository` class. 

- By following the Dependency Inversion Principle, we achieve loose coupling between class, making the system more flexible, maintainable, and easier to test and extend.