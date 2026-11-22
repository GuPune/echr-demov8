<?php

// ตั้งค่า mailer ใช้ร่วมกันระหว่าง web.php และ console.php
// ข้อมูลล็อกอิน SMTP อ่านจาก config/mail-local.php (ไม่เข้า git)
// ถ้าไม่มีไฟล์นั้น อีเมลจะถูกเขียนลง runtime/mail แทนการส่งจริง
$local = is_file(__DIR__ . '/mail-local.php') ? require __DIR__ . '/mail-local.php' : [];

return [
    'class' => 'yii\swiftmailer\Mailer',
    'useFileTransport' => empty($local['password']),
    'messageConfig' => [
        'charset' => 'UTF-8',
    ],
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => $local['host'] ?? 'smtp.mailgun.org',
        'port' => $local['port'] ?? '587',
        'encryption' => $local['encryption'] ?? 'tls',
        'username' => $local['username'] ?? '',
        'password' => $local['password'] ?? '',
        'authMode' => 'login',
    ],
];
