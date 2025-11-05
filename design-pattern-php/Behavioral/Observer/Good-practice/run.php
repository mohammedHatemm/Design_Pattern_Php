<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserObserver.php';

use App\GoodPractice\User;
use App\GoodPractice\UserObserver;

$user = new User('test@example.com');

$observer = new UserObserver();
$user->attach($observer);

$user->changeEmail('new.email@example.com');
