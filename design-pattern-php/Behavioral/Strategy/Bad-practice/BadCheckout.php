<?php
class BadCheckout
{

  private $orderTotal;
  public function __construct(float $total)
  {
    $this->orderTotal = $total;
  }

  /*
  *
  *
  *@param string  $paymentMethod
   */
  public function processPayment(string $paymentMethod)
  {
    if ($paymentMethod == 'visa') {
      echo "connition to visa getway ...\n";
      echo "processing " . $this->orderTotal . "Via creadet cart \n";
      echo "payment sueccessful\n";
    } else if ($paymentMethod == 'paypal') {
      echo "connition to paypal getway ...\n";
      echo "processing " . $this->orderTotal . "Via paypal \n";
      echo "payment sueccessful\n";
    } elseif ($paymentMethod == 'stripe') {
      echo "connition to stripe getway ...\n";
      echo "processing " . $this->orderTotal . "Via stripe \n";
      echo "payment sueccessful\n";
    }
    $this->updateOrderStataus();
    $this->sendOrderConfirmationEmail();
  }


  public function updateOrderStataus() {}
  public function sendOrderConfirmationEmail() {}
}
