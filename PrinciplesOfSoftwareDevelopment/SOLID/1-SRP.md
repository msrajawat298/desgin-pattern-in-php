## [Single Responsibility Principle (SRP) ](https://youtu.be/HT3TgUABtc8?si=q6g0FtbVyow-ND19)
> "Gather together the things that change for the same reason and separate things that change for different reasons."
- Single Responsibility Principle (SP) states that a class should have only one responsibility.
- Or a class should have only one reason to change.
- When a class has only one responsibility, it becomes easier to change and test. 
- If a class has multiple responsibilities, changing one responsibility may impact others and more testing efforts will be required then.
- Here’s an example that demonstrates the Single Responsibility Principle in PHP:
```php
class UserManager {
  public function createUser($username, $password) {
    // Code for creating a new user in the database
  }

  public function deleteUser($userId) {
    // Code for deleting a user from the database
  }

  public function sendWelcomeEmail($userId) {
    // Code for sending a welcome email to a user
  }
}
```
- In this example, we have a UserManager class that handles user-related operations. 
- However, it violates the Single Responsibility Principle because it has multiple responsibilities:
    - Creating a user in the database.
    - Deleting a user from the database.
    - Sending a welcome email to a user.

- To adhere to the Single Responsibility Principle, we can refactor the code into separate classes, each with a single responsibility.

```php
class UserManager {
  public function createUser($username, $password) {
    // Code for creating a new user in the database
  }

  public function deleteUser($userId) {
    // Code for deleting a user from the database
  }
}
OR
class UserCreator {
  public function createUser($username, $password) {
    // Code for creating a new user in the database
  }
}

class UserDeleter {
  public function deleteUser($userId) {
    // Code for deleting a user from the database
  }
}

class EmailSender {
  public function sendWelcomeEmail($userId) {
    // Code for sending a welcome email to a user
  }
}
```

- In above example, the UserManager class is responsible for managing user data, including both creation and deletion. 
- The deleteUser function within the UserManager class handles the actual deletion logic. 
- When considering the Single Responsibility Principle (SRP), the question of where to place the deleteUser function depends on whether deleting a user is part of the responsibility of the UserManager class. 
- If deleting a user is logically related to managing user data, then it makes sense to include the deleteUser function within the UserManager class.
- However, if deleting a user involves complex logic that goes beyond basic user data management, or if there are multiple reasons why the User class might need to change (such as changes in the data storage mechanism or changes in the business rules for user deletion), then it might be appropriate to create a separate class responsible for user deletion.