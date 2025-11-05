# Liskov Substitution Principle (LSP) in PHP

## 📘 What is the Liskov Substitution Principle?

The **Liskov Substitution Principle** is the third principle in the **SOLID** design principles of Object-Oriented Programming.

It states that:

> **"Objects in a program should be replaceable with instances of their subtypes without altering the correctness of that program."**

In simpler terms:

- If you have a base class (or interface) and a subclass (or implementation), you should be able to use the subclass wherever the base class is expected, and the program should still behave correctly.
- Subclasses should extend the functionality of the base class without changing its core behavior or breaking its contracts.

---

## ⚠️ The Problem Without LSP (Bad Practice Example)

Consider the classic Rectangle-Square problem. A square is a rectangle, but with the added constraint that its width and height must always be equal. If `Square` inherits from `Rectangle`:

- The `Rectangle` class might have `setWidth()` and `setHeight()` methods that allow independent modification of width and height.
- If `Square` overrides these methods to maintain its square property (e.g., setting both width and height to the same value when one is changed), it changes the expected behavior of the `Rectangle`'s `setWidth()`/`setHeight()` methods.
- When a function expects a `Rectangle` and is given a `Square`, and it tries to set width and height independently, the `Square` will behave differently, leading to incorrect results (e.g., area calculation).

This violates LSP because a `Square` cannot be substituted for a `Rectangle` without altering the correctness of the program.

See `Bad-practice/Rectagle.php` and `Bad-practice/Squre.php` for the implementation.

---

## ✅ How to Apply LSP (Good Practice Example)

To adhere to LSP, we should focus on behavior rather than just type. If a subtype cannot fulfill the contract of its base type without unexpected side effects, then inheritance is not appropriate.

For the Rectangle-Square problem, a better approach is often to:

- Define a common interface (e.g., `Shape`) with methods like `getArea()`.
- Have `Rectangle` and `Square` implement this `Shape` interface independently.
- This way, neither class is forced to inherit behavior that contradicts its nature, and both can be used polymorphically where a `Shape` is expected.

See `Good-practice/Shape.php`, `Good-practice/Rectagle.php`, and `Good-practice/Squre.php` for the implementation.

---

## 🚀 How to Run the Examples

To run both the bad and good practice examples, navigate to this directory in your terminal and execute the `run.php` file:

```bash
php run.php
```

This will output the results of both examples, demonstrating the LSP violation and its resolution.