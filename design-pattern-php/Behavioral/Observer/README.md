# Observer Design Pattern

The Observer Pattern is a behavioral design pattern that lets you define a subscription mechanism to notify multiple objects about any events that happen to the object they’re observing.

## Core Components

*   **Subject**: The object that is being observed. It maintains a list of its observers and notifies them of any state changes.
*   **Observer**: An interface or abstract class that defines the `update` method. All concrete observers must implement this method.
*   **Concrete Observer**: An object that wants to be notified of changes in the subject. It implements the `Observer` interface and registers itself with the subject.

## When to Use the Observer Pattern

Use the Observer pattern when:

*   Changes to the state of one object may require changing other objects, and you don’t know how many objects need to be changed.
*   An object should be able to notify other objects without making assumptions about who those objects are. In other words, you don’t want these objects to be tightly coupled.

