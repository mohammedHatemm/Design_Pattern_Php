<?php

class User
{
  public function __construct(private string $name, private string $email) {}


  public function validateEmail(): bool
  {
    return filter_var($this->email, FILTER_VALIDATE_EMAIL);
  }

  public function saveInDatabase()
  {
    echo "Saving {$this->name} to database";
  }


  public function  sendWelcomeEmail()
  {
    echo "sending welcome email to  {this->email} ";
  }
}

$user = new User("hamoksha", "hamoksha@hamoksha.com");
$user->validateEmail();
$user->saveInDatabase();
$user->sendWelcomeEmail();

