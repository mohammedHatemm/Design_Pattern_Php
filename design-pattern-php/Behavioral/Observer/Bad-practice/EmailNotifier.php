<?php

declare(strict_types=1);

namespace App\BadPractice;

class EmailNotifier
{
    public function sendEmail(string $email): void
    {
        echo "Sending email to: " . $email . "\n";
    }
}
