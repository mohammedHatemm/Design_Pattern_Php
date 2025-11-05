# Single Responsibility Principle (SRP) in PHP

## 📘 What is the Single Responsibility Principle?

The **Single Responsibility Principle (SRP)** is the first of the **SOLID principles** in Object-Oriented Programming.

It states that:
> **"A class should have only one reason to change."**

This means that **each class should do only one job** or be responsible for a single part of the functionality in a program.

---

## 💡 Why is SRP Important?

- ✅ **Easier Maintenance:** When a class has one responsibility, changes in one area don’t break others.
- 🧱 **Better Reusability:** Small, focused classes can be reused in other parts of the system.
- 🔍 **Improved Readability:** It’s easier to understand what each class does.
- 🧪 **Simpler Testing:** Each class can be tested independently.

---

## 🧠 Example Explanation

Let’s say we have a class that **handles both user data and user reporting**.
This violates SRP because the class has **two responsibilities**:
1. Managing user information.
2. Generating reports.

If you later need to change how reports work, you’d be forced to modify the same class that manages user data — creating tight coupling and high risk of errors.

---

## ✅ How to Apply SRP

You can fix this by **splitting the logic** into separate classes:
- One class to **manage user data** (e.g., `User`).
- Another class to **handle report generation** (e.g., `UserReport`).

Each class will then have **only one reason to change**:
- `User` changes only if the way user data is stored changes.
- `UserReport` changes only if report formatting or generation changes.

---

## 📂 Example File
Check the file [`example.php`](example.php) for a complete demonstration.
