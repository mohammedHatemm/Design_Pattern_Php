<?php
class GoodCheckout
{
  private $orderTotal;
  private  PaymentStrategy $paymentStrategy;

  public function __construct(float $total)
  {
    $this->orderTotal = $total;
  }

  public function setPaymentMethod(PaymentStrategy $paymentStrategy)
  {
    $this->paymentStrategy = $paymentStrategy;
  }

  public function paymentProcess()
  {
    if (!isset($this->paymentStrategy))
      throw new \Exception("payment method not set ");

    $this->paymentStrategy->pay($this->orderTotal);
    $this->updateOrderStatus();
    $this->sendOrderConfermationMai();
  }


  public function updateOrderStatus() {}
  public function sendOrderConfermationMai() {}
}
