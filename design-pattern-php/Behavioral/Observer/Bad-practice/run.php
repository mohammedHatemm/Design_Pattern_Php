<?php

require_once __DIR__ . '/User.php';

use App\BadPractice\User;

$user = new User('test@example.com');
$user->changeEmail('new.email@example.com');
