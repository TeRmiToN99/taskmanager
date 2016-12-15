<?php
use \App\Models\User;
require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

function sendMail(User $user, string $message){
    echo 'Почта с текстом: ' . $message . '<br>' . 'на почту: '  . $user->email;
}

sendMail($users[0], 'Какойто не очень приятный текст..');