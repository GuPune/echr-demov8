<?php

return [
    'adminEmail' => 'ecmbu.no-reply@esubmissionsystem.com',
    'adminName' => 'ศูนย์จริยธรรมการวิจัยในมนุษย์ มหาวิทยาลัยมหามกุฎราชวิทยาลัย',
    'sendMailCmd' => 'php /app/web/echr/yii email-queue/send-mail',
//    'dateFormat' => 'd/m/Y',
//    'dateFormatJs' => 'DD/MM/YYYY',
    'alertCheckInterval' => 5 * 60 * 1000,
    'user.passwordResetTokenExpire' => 15 * 60 * 1000,
    'i18nSuffixes' => [
        'th' => '',
        'en' => '_eng',
    ]
];
