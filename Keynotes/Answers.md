### 1. **Can you explain the Hexagonal Architecture and how you implemented it in this case study?**

**Answer**:  
Hexagonal Architecture, also known as Ports and Adapters, separates the core business logic from the external systems (such as databases, web frameworks, or UIs). This architecture promotes testability, maintainability, and flexibility by making the business logic independent of external factors.

In this case study, I followed Hexagonal Architecture by dividing the code into two main layers:
- **Core Domain Layer**: This includes the business logic like the `Account`, `Amount`, and `TransactionLog` classes. These encapsulate the logic for debiting and crediting accounts, managing balances, and tracking transactions.
- **Adapters Layer**: This is represented by classes such as `PayByCardCommandHandler`, which interact with external systems (such as a CLI or database) by issuing commands and storing transactions in repositories.

The handlers (like `PayByCardCommandHandler`) serve as ports, and repositories act as adapters. I also added test cases for better isolation of business logic.

### 2. **What SOLID principles did you apply while implementing this case study?**

**Answer**:  
I adhered to several SOLID principles:
- **Single Responsibility Principle (SRP)**: Each class has a specific responsibility. For instance, `Account` handles account operations like debiting and crediting, while `TransactionLog` manages transaction-related information.
- **Open-Closed Principle (OCP)**: The system can be extended, for example, by adding new transaction types or currencies without modifying existing code. The use of the `Amount` and `Account` abstractions makes this possible.
- **Liskov Substitution Principle (LSP)**: Each class in the domain layer can be replaced with its subtype without affecting the correctness of the program.
- **Interface Segregation Principle (ISP)**: We kept interfaces lean. For example, `AccountRegistry` and `TransactionRepository` are focused on specific tasks like loading accounts or storing transactions.
- **Dependency Inversion Principle (DIP)**: High-level modules, like the `PayByCardCommandHandler`, depend on abstractions (`AccountRegistry`, `TransactionRepository`) instead of concrete implementations.

### 3. **What changes did you make to the `Account` class, and why?**

**Answer**:  
I made several key modifications to the `Account` class to handle the transaction logic:
- Added the `debit` and `credit` methods for debiting and crediting amounts. These methods ensure encapsulation and keep the logic within the domain model.
- Added checks in the `debit` method to throw a `DomainException` if there are insufficient funds. This enforces the business rule of preventing overdraft transactions.
- The `getBalance` and `getCurrency` methods were implemented to allow checking the balance and currency before a transaction.

This encapsulation within the `Account` class keeps the business logic clean and ensures consistency across the application.

### 4. **How did you implement the business rules for the transaction, and how do they affect your design?**

**Answer**:  
The business rules are implemented in the `PayByCardCommandHandler` class, particularly in the `handle()` method:
- **Positive amount**: I check if the transaction amount is strictly positive before proceeding. If it's not, an exception is thrown.
- **Currency matching**: The currency of the transaction is validated against the customer's and merchant's accounts. If there is a mismatch, an `InvalidArgumentException` is thrown.
- **Debiting and crediting accounts**: I utilize the `debit()` and `credit()` methods of the `Account` class to adjust balances.
- **Transaction logging**: I record the transaction in a `TransactionLog` object, capturing the date, the debit, and credit entries. This allows easy tracking of all account movements.

### 5. **How did you ensure testability and maintainability in your code?**

**Answer**:  
- **Testability**: I used PHPUnit to write unit tests for the `PayByCardCommandHandler` class. The handler relies on abstractions (`AccountRegistry`, `TransactionRepository`), which are mocked in the tests. This isolates the business logic and makes the tests more reliable.
- **Maintainability**: The use of Hexagonal Architecture helps to decouple the core business logic from external systems. If any part of the infrastructure needs to change (for example, switching from an in-memory database to a real one), the core logic remains unchanged. This separation reduces the impact of changes and makes the system easier to maintain.

### 6. **Can you explain how you handle error scenarios in the transaction processing?**

**Answer**:  
Several error scenarios are handled:
- **Invalid amount**: If the amount is less than or equal to zero, I throw an exception to indicate an invalid transaction.
- **Account not found**: If either the client or merchant account does not exist in the `AccountRegistry`, an `AccountDoesNotExistException` is thrown.
- **Insufficient funds**: When attempting to debit the client's account, I check if the balance is sufficient. If not, I throw an `InsufficientFundsException`.
- **Currency mismatch**: I check if the currencies of both the client and merchant accounts match the transaction currency. If not, I throw an `InvalidArgumentException`.

### 7. **How did you handle currency and amounts in the code?**

**Answer**:  
The `Amount` class models amounts in cents to avoid floating-point precision issues. It has two properties: `value` (the amount in cents) and `currency` (e.g., "EUR" or "USD"). By using integer arithmetic for currency amounts, we ensure more precise calculations.

I implemented `add()` and `subtract()` methods to modify the amount safely, ensuring the currency is correctly handled throughout transactions.

### 8. **What is Domain-Driven Design (DDD), and how did you apply its principles here?**

**Answer**:  
Domain-Driven Design (DDD) is an approach to software development where the focus is on modeling the core domain and its logic in a way that reflects real-world concepts. I applied DDD principles in the following ways:
- **Entities**: Classes like `Account`, `Amount`, and `TransactionLog` are core entities with business identities and rules.
- **Value Objects**: The `Amount` class is a value object representing an immutable quantity of money. It can be compared and manipulated safely.
- **Aggregates**: The `Account` and `TransactionLog` classes could be seen as aggregate roots, ensuring that transactions and balances are consistent within the system.
- **Repositories**: I used the `TransactionRepository` and `AccountRegistry` to persist and retrieve aggregates without exposing underlying persistence details.

### 9. **Can you describe the transaction log and its role in the system?**

**Answer**:  
The `TransactionLog` class is responsible for recording each transaction in the system. It stores the transaction ID, the timestamp, and the accounting entries for the customer and merchant accounts. These entries capture:
- The account number involved.
- The amount of the transaction (positive or negative).
- The updated balance after the transaction.

This class provides a complete record of every movement in the system, making it easy to trace payments and audit financial activity.

### 10. **How does the `TransactionRepository` work, and why did you use it?**

**Answer**:  
The `TransactionRepository` is an abstraction that handles the storage of `TransactionLog` objects. It allows the system to persist transactions in a consistent and isolated way. By using a repository pattern, I ensure that the core business logic doesn't directly interact with the database or other persistence mechanisms. This decouples the business logic from infrastructure concerns, improving both testability and maintainability.

---

These questions cover most aspects of your code, design, and the applied architecture. If you have specific parts of the code or approach you want to highlight further, feel free to ask!