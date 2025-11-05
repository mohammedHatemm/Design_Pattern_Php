# Open/Closed Principle (OCP) in PHP

## 📘 What is the Open/Closed Principle?

The **Open/Closed Principle** is the second principle in the **SOLID** design principles of Object-Oriented Programming.

It states that:

> **"Software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification."**

In simpler terms:

- You should be able to **add new functionality** to a class **without changing its existing code**.

---

## 💡 Why is OCP Important?

- ✅ **Reduces the risk of breaking existing code** — since you don’t modify already-tested classes.
- 🧩 **Encourages scalability** — you can extend system behavior easily.
- 🔁 **Promotes reusability and flexibility** — new features can be added through inheritance or composition.
- 🔒 **Improves stability** — base classes stay consistent while extensions evolve.

---

## ⚠️ The Problem Without OCP

When a class is **not closed for modification**, every time a new requirement arises, you have to **edit** the same class.
This often leads to:

- Bugs in existing functionality.
- Long, complex, and hard-to-maintain classes.
- Tight coupling between different parts of the system.

---

## ✅ How to Apply OCP

To follow the Open/Closed Principle:

1. **Keep your core logic stable** — make your class “closed for modification.”
2. **Allow extensions** — use **interfaces**, **abstract classes**, or **polymorphism** to enable new behavior without editing old code.
3. **Use dependency injection** — to easily swap or extend implementations.

---

## 🧠 Example Explanation

Imagine you have a class that calculates discounts for different customer types:

- At first, it supports only regular customers.
- Later, you add logic for VIP customers.
- Then, you need logic for seasonal offers.

If you keep modifying the same class each time, it violates OCP.

Instead, you can:

- Create a base **`Discount`** interface or abstract class.
- Implement separate discount strategies like `RegularDiscount`, `VIPDiscount`, and `SeasonalDiscount`.
- Use polymorphism to add new discount types **without changing** the core calculation logic.

---

## 📂 Example File

See [`example.php`](example.php) for a full demonstration of the Open/Closed Principle in PHP.
