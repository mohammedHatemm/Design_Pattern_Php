# Strategy Design Pattern

The Strategy pattern is a behavioral design pattern that enables selecting an algorithm at runtime. Instead of implementing a single algorithm directly, code receives run-time instructions as to which in a family of algorithms to use.

## Purpose

The primary purpose of the Strategy pattern is to define a family of algorithms, encapsulate each one, and make them interchangeable. This allows the algorithm to vary independently from the clients that use it. It is one of the patterns included in the influential book "Design Patterns" by the Gang of Four.

## Key Components

1.  **Context:**
    *   The class that uses a strategy.
    *   It maintains a reference to a Strategy object and delegates work to it.
    *   The Context is not aware of the concrete type of the strategy, it only knows the interface.

2.  **Strategy (Interface or Abstract Class):**
    *   Declares a common interface for all supported algorithms.
    *   The Context uses this interface to call the algorithm defined by a Concrete Strategy.

3.  **Concrete Strategies:**
    *   Implement the algorithm using the Strategy interface.
    *   Each concrete strategy provides a different implementation of the algorithm.

## When to Use the Strategy Pattern

*   When you want to use different variants of an algorithm within an object and be able to switch from one algorithm to another during runtime.
*   When you have a lot of similar classes that only differ in the way they execute some behavior.
*   To isolate the business logic of a class from the implementation details of algorithms that may not be as important in the context of that logic.
*   When your class has a massive conditional statement that switches between different variants of the same algorithm.

## Examples in this Directory

This directory provides two examples to illustrate the Strategy pattern:

*   [**Bad-practice**](./Bad-practice/): Shows an implementation that does **not** use the Strategy pattern, resulting in a rigid and hard-to-maintain structure. This example uses a large conditional `if-else if` block to select the behavior, violating the Open/Closed Principle.

*   [**Good-practice**](./Good-practice/): Demonstrates a proper implementation of the Strategy pattern, where different payment algorithms are encapsulated in separate strategy classes. This results in a flexible, maintainable, and scalable solution that adheres to SOLID principles.

By comparing these two approaches, you can clearly see the benefits of using the Strategy design pattern to manage interchangeable behaviors in your code.