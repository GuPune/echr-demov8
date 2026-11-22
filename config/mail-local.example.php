<?php

// คัดลอกไฟล์นี้เป็น config/mail-local.php แล้วใส่ข้อมูล SMTP จริง (ไฟล์ mail-local.php ไม่เข้า git)
// พอร์ตของ Mailgun: 587 หรือ 2525 คู่กับ 'tls', 465 คู่กับ 'ssl'
return [
    'host' => 'smtp.mailgun.org',
    'port' => '587',
    'encryption' => 'tls',
    'username' => '',
    'password' => '',
];
