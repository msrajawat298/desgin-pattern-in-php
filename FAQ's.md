## FAQ's 

- Q. What is design patterns?

    Ans. Design patterns are general, reusable solutions to common problems that arise during software design and development. They represent best practices for solving certain types of problems and provide a way to communicate efficient and proven design solutions. Design patterns are not templates or ready-to-use code; instead, they are guidelines for structuring code to achieve specific goals while promoting flexibility, maintainability, and scalability.

- The concept of design patterns was popularized by the book "Design Patterns: Elements of Reusable Object-Oriented Software," written by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides, often referred to as the "Gang of Four" (GoF). The book introduced 23 design patterns classified into three categories: creational, structural, and behavioral.

    1. Creational Patterns:
        These patterns deal with object creation mechanisms, trying to create objects in a manner suitable to the situation.
        Examples include the Singleton pattern, Factory Method pattern, and Abstract Factory pattern.
    2. Structural Patterns:
        These patterns focus on the composition of classes or objects to form larger structures.
        Examples include the Adapter pattern, Bridge pattern, and Composite pattern.
    3. Behavioral Patterns:
        These patterns are concerned with algorithms and the assignment of responsibilities between objects.
        Examples include the Observer pattern, Strategy pattern, and Command pattern.

    Using design patterns can lead to several benefits in software development, such as improved code organization, code reusability, easier maintenance, and enhanced communication among team members. However, it's important to apply design patterns judiciously and not force them into a design if they don't naturally fit the problem at hand. Each design pattern is a tool, and the key is to understand when and how to use them appropriately.

- Q. What is MVC ?
    
    Ans. It is a software architectural pattern commonly used in the development of user interfaces and web applications.

- Q. What is MVVC ?
    
    Ans. There's the Model-View-ViewModel (MVVM) pattern, which is commonly used in the context of modern front-end frameworks like Angular and Vue.js. These patterns share the fundamental idea of separating concerns for better software design and development.

- Q. What is dependency injection ?
    
    Ans. Dependency Injection (DI) is a design pattern and a technique in software development where the dependencies of a component (such as a class or a module) are injected or passed into it from the outside rather than being created within the component itself. The main goal of dependency injection is to achieve better modularity, maintainability, and testability of code by promoting loose coupling between components.

    In a system using dependency injection:

    1. **Dependent components (or classes) do not create their dependencies:**
    - Instead of creating instances of the classes they depend on, these instances are provided (injected) from the outside.

    2. **Dependencies are typically injected through the constructor or setter methods:**
    - Constructor injection: Dependencies are passed through the constructor when an object is created.
    - Setter injection: Dependencies are set through setter methods after an object has been created.

    Here's a simple example in a programming language like php: [Dependency Injection](dependency-injection.php)

    Benefits of Dependency Injection:

    1. **Modularity and Loose Coupling:**
    - Components are not tightly coupled to their dependencies, making it easier to replace or update dependencies without affecting the dependent code.

    2. **Testability:**
    - Easier unit testing because dependencies can be replaced with mock or test implementations during testing.

    3. **Maintainability:**
    - Changes to the implementation of a dependency don't require changes to the dependent components as long as the interface remains the same.

    4. **Readability and Reusability:**
    - Code is more readable and reusable because dependencies are clearly defined and can be easily swapped.

