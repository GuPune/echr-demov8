<?php

use yii\db\Migration;

/**
 * submission.submission_number เป็นค่าที่ไม่บังคับ (ตอนสร้าง submission ใหม่ยังไม่มีเลขนี้)
 * แต่ในฐานข้อมูลเป็น NOT NULL ไม่มีค่า default ทำให้ INSERT ไม่ผ่านบน MySQL ที่เปิด strict mode
 */
class m261123_000001_alter_submission_number_nullable extends Migration {

    public function safeUp() {
        $this->alterColumn('submission', 'submission_number', $this->string()->null()->defaultValue(null));
        $this->addCommentOnColumn('submission', 'submission_number', 'เลขที่รับการยื่น submission ของ crec');
    }

    public function safeDown() {
        $this->update('submission', ['submission_number' => ''], ['submission_number' => null]);
        $this->alterColumn('submission', 'submission_number', $this->string()->notNull());
        $this->addCommentOnColumn('submission', 'submission_number', 'เลขที่รับการยื่น submission ของ crec');
    }

}
