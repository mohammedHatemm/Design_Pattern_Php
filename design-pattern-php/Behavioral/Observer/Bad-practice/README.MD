# Observer Pattern: Bad Practice

This example demonstrates a tightly coupled implementation that does not use the Observer pattern.

## Files

*   `User.php`: The `User` class is tightly coupled to the `EmailNotifier` class. It directly instantiates and calls the `EmailNotifier` to send an email when the user's email address changes.
*   `EmailNotifier.php`: A simple class responsible for sending emails.
*   `run.php`: This script demonstrates the tightly coupled code.

## How to Run

```bash
php run.php
```

## Why is this a bad practice?

*   **Tight Coupling**: The `User` class is directly dependent on the `EmailNotifier` class. If you want to add another action to be performed when the email changes (e.g., logging, sending a push notification), you would have to modify the `User` class. This violates the Open/Closed Principle.
*   **Lack of Flexibility**: You cannot easily swap the `EmailNotifier` with another notification service without changing the `User` class. The `User` class has to know the specific implementation details of the `EmailNotifier`.
*   **Hard to Test**: When unit testing the `User` class, you are also testing the `EmailNotifier` class, which makes testing more complex.

In contrast, the **Good Practice** example uses the Observer pattern to decouple the `User` (Subject) from its observers, leading to a more flexible, maintainable, and extensible system.
