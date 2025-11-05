<?php

declare(strict_types=1);

namespace App\BadPractice;

require_once __DIR__ . '/EmailNotifier.php';

class User
{
    private string $email;
    private EmailNotifier $notifier;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->notifier = new EmailNotifier();
    }

    public function changeEmail(string $newEmail): void
    {
        $this->email = $newEmail;
        $this->notifier->sendEmail($this->email);
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
