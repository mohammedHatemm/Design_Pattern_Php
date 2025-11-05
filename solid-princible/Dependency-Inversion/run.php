<?php

// --- Bad Practice ---
echo "--- Bad Practice ---\\n";
require_once 'Bad-practice/PasswordReminder.php';

$passwordReminderBad = new PasswordReminder();
$passwordReminderBad->remindPassword();

echo "\\n\\n";

// --- Good Practice ---
echo "--- Good Practice ---\\n";
require_once 'Good-practice/PasswordReminder.php';
require_once 'Good-practice/MySQLConnection.php';

$mysqlConnection = new MySQLConnection();
$passwordReminderGood = new \Good-practice\PasswordReminder($mysqlConnection);
$passwordReminderGood->remindPassword();

?>