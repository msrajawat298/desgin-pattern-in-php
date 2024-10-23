## FAQ's 

- **What is design patterns?**
    - Design patterns are general, reusable solutions to common problems that arise during software design and development. 
    - They represent best practices for solving certain types of problems and provide a way to communicate efficient and proven design solutions. 
    - Design patterns are not templates or ready-to-use code; instead, they are guidelines for structuring code to achieve specific goals while promoting flexibility, maintainability, and scalability.

    - The concept of design patterns was popularized by the book "**Design Patterns**: Elements of Reusable Object-Oriented Software," written by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides, often referred to as the **"Gang of Four"** (GoF). 
    - The book introduced 23 design patterns classified into three categories: creational, structural, and behavioral.

    1. **Creational Patterns:**
        - These patterns deal with object creation mechanisms, trying to create objects in a manner suitable to the situation.
        - Examples include the Singleton pattern, Factory Method pattern, and Abstract Factory pattern.
    2. **Structural Patterns:**
        - These patterns focus on the composition of classes or objects to form larger structures.
        - Examples include the Adapter pattern, Bridge pattern, and Composite pattern.
    3. **Behavioral Patterns:**
        - These patterns are concerned with algorithms and the assignment of responsibilities between objects.
        - Examples include the Observer pattern, Strategy pattern, and Command pattern.

    - Using design patterns can lead to several benefits in software development, such as improved code organization, code reusability, easier maintenance, and enhanced communication among team members. 
    - However, it's important to apply design patterns judiciously and not force them into a design if they don't naturally fit the problem at hand. Each design pattern is a tool, and the key is to understand when and how to use them appropriately.

- **What is MVC ?**
    - It is a software architectural pattern commonly used in the development of user interfaces and web applications.

- **What is MVVC ?**
    - There's the Model-View-ViewModel (MVVM) pattern, which is commonly used in the context of modern front-end frameworks like Angular and Vue.js. These patterns share the fundamental idea of separating concerns for better software design and development.

- **What is Dependency Injection ?**
    - Dependency Injection (DI) is a design pattern and a technique in software development where the dependencies of a component (such as a class or a module) are injected or passed into it from the outside rather than being created within the component itself. 
    - The main goal of dependency injection is to achieve better modularity, maintainability, and testability of code by promoting loose coupling between components.

    In a system using dependency injection:

    1. **Dependent components (or classes) do not create their dependencies:**
        - Instead of creating instances of the classes they depend on, these instances are provided (injected) from the outside.

    2. **Dependencies are typically injected through the constructor or setter methods:**
        - **Constructor injection:** Dependencies are passed through the constructor when an object is created.
        - **Setter injection:** Dependencies are set through setter methods after an object has been created.

    Here's a simple example in a programming language like php: [Dependency Injection](DependencyInjection.php)

    Benefits of Dependency Injection:

    1. **Modularity and Loose Coupling:**
        - Components are not tightly coupled to their dependencies, making it easier to replace or update dependencies without affecting the dependent code.

    2. **Testability:**
        - Easier unit testing because dependencies can be replaced with mock or test implementations during testing.

    3. **Maintainability:**
        - Changes to the implementation of a dependency don't require changes to the dependent components as long as the interface remains the same.

    4. **Readability and Reusability:**
        - Code is more readable and reusable because dependencies are clearly defined and can be easily swapped.

## What is the difference between solid principles and design patterns?
- First of all of all what is a principle in general? 
- A principle is a general or basic truth that must be followed and must not be violated.
- Similarly solid principles are a set of principles which must be followed to develop flexible mentally maintainable and scalable Software System they are not optional they must be followed in every application. 
- Whereas design patterns are concrete and solve a particular kind of problems in softwares.
- For example Singleton pattern solves one problem of preventing multiple objects creation or in the class right but maybe that problem does not exist in your software so you do not need to implement Singleton pattern at all right.
- Therefore design patterns are optional to implement and required to solve a particular kind of problem.
- solid principles are not concrete they are abstract meaning for example to achieve a single responsibility principle there is no 
concrete or fixed solution you can achieve it by using various ways.
- Whereas design patterns are concrete and solve a particular kind of problem in a particular way.
- So for example to implement Factory pattern there is a specific and fixed way to do it.
- **S.O.L.I.D Principles**
    - Single Responsibility Principle (SRP)
    - Open/Closed Principle (OCP)
    - Liskov Substitution Principle (LSP)
    - Interface Segregation Principle (ISP)
    - Dependency Inversion Principle (DIP)

- **Design Patterns**
    - Singleton, Factory, and Observer patterns etc.

## What are the differences between Interfaces and abstract class ?
Interfaces and abstract classes are both used in object-oriented programming to define contracts and establish common behavior among classes, but they have some key differences in their usage and implementation:

1. **Definition**:
   - An interface is a contract that defines a set of methods that a class must implement. It contains only method signatures without any implementation details.
   - An abstract class is a class that cannot be instantiated on its own and may contain both abstract (unimplemented) and concrete (implemented) methods. Abstract classes can also contain properties and constructors.

2. **Multiple Inheritance**:
   - In PHP, a class can implement multiple interfaces, allowing it to inherit behavior from multiple sources. This is known as multiple inheritance through interfaces.
   - PHP does not support multiple inheritance through abstract classes. A class can only inherit from one abstract class.

3. **Implementation**:
   - When a class implements an interface, it must provide implementations for all the methods declared in the interface.
   - When a class extends an abstract class, it may choose to implement or override some or all of the abstract methods defined in the abstract class. However, it is not required to implement abstract methods if they are already implemented in a parent class.

4. **Constructor**:
   - Interfaces cannot have constructors, as they are purely a contract for methods.
   - Abstract classes can have constructors, which can be used to initialize properties or perform other initialization tasks.

5. **Access Modifiers**:
   - Interface methods are implicitly public and cannot have access modifiers such as private or protected.
   - Abstract class methods can have access modifiers, allowing for more control over visibility and access.

6. **Usage**:
   - Interfaces are used to define common behavior across unrelated classes. They provide a way to achieve polymorphism in PHP.
   - Abstract classes are used when there is a need to define a common base class with some shared functionality among its subclasses. They can also be used to provide default implementations for some methods while leaving others to be implemented by subclasses.

In summary, interfaces are more focused on defining contracts for classes to adhere to, while abstract classes provide a way to define common behavior and share code among related classes. The choice between using an interface or an abstract class depends on the specific requirements and design considerations of the application.