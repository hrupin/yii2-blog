<?php

use yii\db\Schema;
use yii\db\Migration;

class m170805_202411_create_table_blogAuthor extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blogAuthor}}', [
            'id' => Schema::TYPE_PK,
            'id_author' => Schema::TYPE_INTEGER,
            'id_user' => Schema::TYPE_INTEGER,
            'lang' => Schema::TYPE_STRING . '(6) NOT NULL',
            'name' => Schema::TYPE_STRING . '(255) NOT NULL',
            'avatar' => Schema::TYPE_STRING . '(255) NOT NULL',
            'description' => Schema::TYPE_STRING . '(500) NULL',
            'about' => Schema::TYPE_TEXT . '(5000) NULL',
            'contact' => Schema::TYPE_TEXT . '(1000) NULL',
            'dateCreated' => Schema::TYPE_INTEGER,
            'dateUpdated' => Schema::TYPE_INTEGER,
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%blogAuthor}}');
    }
}
