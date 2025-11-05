<?php

declare(strict_types=1);

namespace App\GoodPractice;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    public function update(SplSubject $subject): void
    {
        if ($subject instanceof User) {
            echo "User's email has been changed to: " . $subject->getEmail() . "\n";
        }
    }
}
