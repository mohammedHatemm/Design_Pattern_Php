<?php

declare(strict_types=1);

namespace App\GoodPractice;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private string $email;
    private SplObjectStorage $observers;

    public function __construct(string $email)
    {
        $this->email = $email;
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function changeEmail(string $newEmail): void
    {
        $this->email = $newEmail;
        $this->notify();
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
