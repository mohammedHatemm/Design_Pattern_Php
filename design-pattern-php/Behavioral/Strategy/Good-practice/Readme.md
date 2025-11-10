# Good Practice: Strategy Pattern

## Description

This directory demonstrates a "good practice" implementation of the Strategy design pattern. The Strategy pattern defines a family of algorithms, encapsulates each one, and makes them interchangeable. Strategy lets the algorithm vary independently from clients that use it.

## Structure

The implementation consists of the following key components:

1.  **`PaymentStrategy.php` (Strategy Interface):**

    - Defines a common interface for all supported payment algorithms.
    - Declares a method, `pay(float $amount)`, that all concrete strategies must implement.

2.  **Concrete Strategy Classes:**

    - `CachOnDelvery.php`
    - `PaypalPayment.php`
    - `VisaPayment.php`
    - These classes implement the `PaymentStrategy` interface, providing their specific payment logic within the `pay` method. Each class encapsulates a different payment algorithm.

3.  **`GoodCheckout.php` (Context):**
    - This class maintains a reference to a `PaymentStrategy` object.
    - It provides a `setPaymentMethod(PaymentStrategy $paymentStrategy)` method to allow clients to configure the desired payment strategy at runtime.
    - The `paymentProcess()` method delegates the actual payment execution to the currently set `PaymentStrategy` object, without knowing the concrete type of the strategy.

## Benefits of this Approach

This "good practice" implementation addresses the issues found in the "bad practice" example and offers several advantages:

1.  **Adherence to Open/Closed Principle:** The `GoodCheckout` class is open for extension (new payment methods can be added by creating new strategy classes) but closed for modification (you don't need to change `GoodCheckout` itself to add new payment methods).
2.  **Reduced Coupling:** The `GoodCheckout` class is decoupled from the specific payment algorithm implementations. It only interacts with the `PaymentStrategy` interface.
3.  **Increased Flexibility:**
    - Payment methods can be easily swapped at runtime.
    - New payment methods can be introduced without affecting existing client code or the `GoodCheckout` class.
4.  **Improved Maintainability:** Each payment algorithm is encapsulated in its own class, making it easier to understand, test, and maintain individual payment logics.
5.  **Single Responsibility Principle:** Each class has a single responsibility: `GoodCheckout` manages the checkout process, and each concrete strategy handles a specific payment method.

## How to Use

A client would typically:

1.  Instantiate `GoodCheckout` with the order total.
2.  Create an instance of a concrete `PaymentStrategy` (e.g., `new VisaPayment()`).
3.  Set the payment strategy on the `GoodCheckout` object using `setPaymentMethod()`.
4.  Call `paymentProcess()` on the `GoodCheckout` object to execute the payment.

This allows for dynamic selection and execution of different payment strategies based on user choice or other business logic.
