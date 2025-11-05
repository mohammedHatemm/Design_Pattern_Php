# PHP Design Patterns & SOLID Principles

This repository is a comprehensive collection of PHP examples for various design patterns and SOLID principles. Each example includes both "Good Practice" and "Bad Practice" implementations to help you understand the benefits of applying these concepts correctly.

## Directory Structure

```
/
├── design-pattern-php/
│   ├── Behavioral/
│   │   ├── Chain-Of-Responsibilities/
│   │   ├── Command/
│   │   ├── Interpreter/
│   │   ├── Iterator/
│   │   ├── Mediator/
│   │   ├── Memento/
│   │   ├── Null-Object/
│   │   ├── Observer/
│   │   ├── Specification/
│   │   ├── State/
│   │   ├── Strategy/
│   │   ├── Template-Method/
│   │   └── Visitor/
│   └── Creational/
│       └── AbstractFactory/
└── solid-princible/
    ├── Dependency-Inversion/
    ├── Interface-Segregation/
    ├── Liskov-Subsitution/
    ├── Open-Close/
    └── Single-Resposiblity/
```

## SOLID Principles

The SOLID principles are a set of five design principles for object-oriented software development. Following these principles helps in creating more maintainable, scalable, and robust applications.

*   ### [Single Responsibility Principle](./solid-princible/Single-Resposiblity/)
    A class should have only one reason to change.

*   ### [Open/Closed Principle](./solid-princible/Open-Close/)
    Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification.

*   ### [Liskov Substitution Principle](./solid-princible/Liskov-Subsitution/)
    Subtypes must be substitutable for their base types.

*   ### [Interface Segregation Principle](./solid-princible/Interface-Segregation/)
    Clients should not be forced to depend on interfaces they do not use.

*   ### [Dependency Inversion Principle](./solid-princible/Dependency-Inversion/)
    High-level modules should not depend on low-level modules. Both should depend on abstractions. Abstractions should not depend on details. Details should depend on abstractions.

## Design Patterns

Design patterns are reusable solutions to commonly occurring problems within a given context in software design.

### Creational Patterns

These patterns provide ways to create objects while hiding the creation logic, rather than instantiating objects directly using the `new` operator.

*   ### [Abstract Factory](./design-pattern-php/Creational/AbstractFactory/)
    Provides an interface for creating families of related or dependent objects without specifying their concrete classes.

### Behavioral Patterns

These patterns are concerned with algorithms and the assignment of responsibilities between objects.

*   ### [Chain of Responsibility](./design-pattern-php/Behavioral/Chain-Of-Responsibilities/)
    Avoids coupling the sender of a request to its receiver by giving more than one object a chance to handle the request.

*   ### [Command](./design-pattern-php/Behavioral/Command/)
    Turns a request into a stand-alone object that contains all information about the request.

*   ### [Interpreter](./design-pattern-php/Behavioral/Interpreter/)
    Given a language, defines a representation for its grammar along with an interpreter that uses the representation to interpret sentences in the language.

*   ### [Iterator](./design-pattern-php/Behavioral/Iterator/)
    Provides a way to access the elements of an aggregate object sequentially without exposing its underlying representation.

*   ### [Mediator](./design-pattern-php/Behavioral/Mediator/)
    Defines an object that encapsulates how a set of objects interact.

*   ### [Memento](./design-pattern-php/Behavioral/Memento/)
    Without violating encapsulation, captures and externalizes an object's internal state so that the object can be restored to this state later.

*   ### [Null Object](./design-pattern-php/Behavioral/Null-Object/)
    Provides an object as a surrogate for the lack of an object of a given type.

*   ### [Observer](./design-pattern-php/Behavioral/Observer/)
    Defines a one-to-many dependency between objects so that when one object changes state, all its dependents are notified and updated automatically.

*   ### [Specification](./design-pattern-php/Behavioral/Specification/)
    A business rule that can be combined with other business rules.

*   ### [State](./design-pattern-php/Behavioral/State/)
    Allows an object to alter its behavior when its internal state changes.

*   ### [Strategy](./design-pattern-php/Behavioral/Strategy/)
    Defines a family of algorithms, encapsulates each one, and makes them interchangeable.

*   ### [Template Method](./design-pattern-php/Behavioral/Template-Method/)
    Defines the skeleton of an algorithm in an operation, deferring some steps to subclasses.

*   ### [Visitor](./design-pattern-php/Behavioral/Visitor/)
    Represents an operation to be performed on the elements of an object structure.
