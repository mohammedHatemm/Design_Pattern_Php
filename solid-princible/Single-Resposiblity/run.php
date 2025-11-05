<?php

// --- Bad Practice ---
echo "--- Bad Practice ---\n";
require_once 'bad-practice/User.php';
echo "\n\n";

// --- Good Practice ---
echo "--- Good Practice ---\n";
require_once 'good-practice/User.php';
require_once 'good-practice/UserRepository.php';
require_once 'good-practice/EmailService.php';

$user = new User("hamoksha", "hamoksha@hamoksha.com");

$userRepository = new UserRepository();
$userRepository->save($user);

echo "\n";

$emailService = new EmailService();
$emailService->sendWelcomeEmail($user);

?>