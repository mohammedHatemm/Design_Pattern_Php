# Observer Pattern: Good Practice

This example demonstrates the Observer design pattern using PHP's built-in SPL (Standard PHP Library) interfaces, `SplSubject` and `SplObserver`.

## Files

*   `User.php`: The `User` class acts as the **Concrete Subject**. It implements `SplSubject` and maintains a list of observers. When the user's email changes, it notifies all registered observers.
*   `UserObserver.php`: The `UserObserver` class is a **Concrete Observer**. It implements `SplObserver` and defines the `update` method. When notified, it prints the user's new email address.
*   `run.php`: This script demonstrates the pattern in action. It creates a `User` object and a `UserObserver` object, attaches the observer to the user, and then changes the user's email, which triggers the notification.

## How to Run

```bash
php run.php
```

This implementation follows the Observer pattern by decoupling the `User` (Subject) from its observers. The `User` class doesn't need to know the concrete classes of its observers, only that they implement the `SplObserver` interface. This makes the system more flexible and easier to extend.
