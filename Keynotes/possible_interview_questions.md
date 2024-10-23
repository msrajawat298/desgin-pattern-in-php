Here are the possible questions an interviewer could ask based on the case study, the implementation, and the hexagonal architecture concept:

### **Hexagonal Architecture Questions**
1. **What is Hexagonal Architecture (Ports and Adapters Architecture)?**
   - Could you explain how you applied hexagonal architecture principles in your solution?
   - How do ports and adapters improve modularity and maintainability in software design?
   - Why did you choose hexagonal architecture for this problem?
   
2. **Ports and Adapters**
   - What are the "ports" and "adapters" in your design?
   - How did you ensure that the core domain logic (use case) is independent of the infrastructure (e.g., database or CLI)?
   - Can you explain how dependency inversion is applied in your implementation?

3. **Testing**
   - How does hexagonal architecture support testing?
   - How did you mock the dependencies of your use case for unit testing?
   - Can you describe the test cases you wrote and why?

### **Object-Oriented Design Questions**
1. **SOLID Principles**
   - How did you apply SOLID principles in your solution?
   - Can you explain how the **Single Responsibility Principle (SRP)** is followed in your `PayByCardCommandHandler` class?
   - Did you apply the **Dependency Inversion Principle (DIP)** in your code? How?

2. **Domain-Driven Design (DDD)**
   - How did you separate domain logic from application and infrastructure layers?
   - What domain models did you create, and how did they map to real-world entities?
   - How did you use the repository pattern in your code?

### **Implementation-Specific Questions**
1. **Account Handling**
   - Can you explain how the `Account` class handles debit and credit operations?
   - What would happen if the customer doesn't have enough balance? How did you handle that?
   
2. **Amount Handling**
   - Why did you model the amount in cents? 
   - How did you ensure that the amount and currency are handled consistently throughout the system?

3. **Transaction Handling**
   - How does your solution log transactions, and why did you create a `TransactionLog` class?
   - How is a transaction uniquely identified and stored?
   
4. **Error Handling**
   - How did you handle exceptions, such as insufficient funds or non-existing accounts?
   - What other edge cases did you consider (e.g., currency mismatch)?

### **Code Design and Maintenance**
1. **Maintainability**
   - How does your code ensure maintainability for future changes or additional business rules?
   - If a new feature was added, such as a refund or transaction reversal, how would your design accommodate that?

2. **Modularity**
   - How does your code structure encourage reusability and separation of concerns?
   - Why did you separate the `TransactionDisplay` from the transaction processing logic?

### **Business Logic & Requirements Questions**
1. **Business Rules**
   - How did you ensure that the transaction amount is positive and the currencies match?
   - How does your implementation update the customer's and merchant's account balances in the correct order?

2. **Use Case Flow**
   - Walk us through the execution flow of the `handle()` method in `PayByCardCommandHandler`.
   - What checks are performed before processing the transaction?

### **Testing**
1. **Unit Tests**
   - What kind of tests did you write for the `PayByCardCommandHandler` class?
   - How did you test scenarios such as insufficient funds, non-existing accounts, or currency mismatches?
   
2. **Code Coverage**
   - How did you ensure that your unit tests cover all critical parts of the business logic?

### **Performance & Optimization**
1. **Performance Considerations**
   - Did you consider any performance implications when handling multiple transactions?
   - How does your solution handle concurrency issues (e.g., two simultaneous transactions on the same account)?

---

### **Class Diagram**

Based on your changes, the class diagram could include:

- **Account**
   - Attributes: `number`, `balance: Amount`
   - Methods: `debit()`, `credit()`, `getBalance()`, `getCurrency()`

- **Amount**
   - Attributes: `value`, `currency`
   - Methods: `getValue()`, `getCurrency()`, `add()`, `subtract()`

- **PayByCardCommandHandler**
   - Dependencies: `AccountRegistry`, `TransactionRepository`
   - Methods: `handle()`

- **TransactionLog**
   - Attributes: `id`, `date`, `accountingEntries: array`
   - Methods: `getId()`, `getDate()`, `getAccountingEntries()`

- **AccountingEntry**
   - Attributes: `accountNumber`, `amountBefore`, `amountAfter`
   - Methods: Constructor

