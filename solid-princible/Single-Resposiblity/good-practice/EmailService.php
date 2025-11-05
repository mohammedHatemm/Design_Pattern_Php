<?php

class EmailService
{
  public function sendWelcomeEmail(User $user)
  {
    echo "sending welcom email to {$user->email} ....";
  }
}
