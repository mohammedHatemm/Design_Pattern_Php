# Bad Practice: Strategy Pattern

## Description

This directory demonstrates a "bad practice" implementation related to the Strategy design pattern, specifically concerning how different algorithms or behaviors are handled within a class.

The Strategy pattern is intended to define a family of algorithms, encapsulate each one, and make them interchangeable. It allows the algorithm to vary independently from clients that use it.

## The Problem in `BadCheckout.php`

In `BadCheckout.php`, the `processPayment` method directly incorporates the logic for various payment methods (Visa, PayPal, Stripe) using a series of `if-else if` statements.

```php
public function processPayment(string $paymentMethod)
{
    if ($paymentMethod == 'visa') {
        // Visa payment logic
    } else if ($paymentMethod == 'paypal') {
        // PayPal payment logic
    } elseif ($paymentMethod == 'stripe') {
        // Stripe payment logic
    }
    // ...
}
```

## Why this is a Bad Practice

1.  **Violation of Open/Closed Principle:** The `BadCheckout` class is not open for extension but closed for modification. To add a new payment method, you would need to directly modify the `processPayment` method, adding another `else if` block. This increases the risk of introducing bugs into existing, working code.
2.  **Tight Coupling:** The `BadCheckout` class is tightly coupled to the specific implementations of each payment gateway. Changes in a payment gateway's API might require changes within `BadCheckout`, even if other payment methods are unaffected.
3.  **Reduced Flexibility:** It's difficult to change payment methods at runtime or to introduce new payment methods without altering the core `BadCheckout` logic.
4.  **Code Duplication:** While not explicitly shown as extensive duplication in this simplified example, in a real-world scenario, the setup and execution logic for each payment method might involve repetitive code.
5.  **Increased Complexity:** As the number of payment methods grows, the `processPayment` method becomes larger, harder to read, and more complex to maintain.

## Towards a Good Practice

A "good practice" implementation using the Strategy pattern would involve:

*   Defining a common interface for all payment strategies.
*   Creating separate classes for each payment method (e.g., `VisaPaymentStrategy`, `PaypalPaymentStrategy`), each implementing the common interface.
*   The `Checkout` class (context) would hold a reference to a payment strategy object and delegate the payment processing to it, rather than implementing the logic itself. This allows the payment strategy to be swapped dynamically.

Refer to the `Good-practice` directory for an example of how this problem can be solved using the Strategy pattern.