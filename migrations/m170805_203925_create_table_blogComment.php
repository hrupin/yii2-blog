<?php

use yii\db\Schema;
use yii\db\Migration;

class m170805_203925_create_table_blogComment extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blogComment}}', [
            'id' => Schema::TYPE_PK,
            'id_comment' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_parent' => Schema::TYPE_INTEGER . ' NULL',
            'id_user' => Schema::TYPE_INTEGER . ' NULL',
            'id_post' => Schema::TYPE_INTEGER . ' NOT NULL',
            'lang' => Schema::TYPE_STRING . '(6) NOT NULL',
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'email' => Schema::TYPE_STRING . '(60) NOT NULL',
            'phone' => Schema::TYPE_STRING . '(16) NOT NULL',
            'contact' => Schema::TYPE_STRING . '(255) NULL',
            'avatar' => Schema::TYPE_STRING . '(255) NOT NULL',
            'content' => Schema::TYPE_TEXT . '(3000) NOT NULL',
            'dateCreated' => Schema::TYPE_INTEGER,
            'dateUpdated' => Schema::TYPE_INTEGER,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%blogComment}}');
    }
}
