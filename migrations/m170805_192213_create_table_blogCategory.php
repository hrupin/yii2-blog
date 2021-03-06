<?php

use yii\db\Schema;
use yii\db\Migration;

class m170805_192213_create_table_blogCategory extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blogCategory}}', [
            'id' => Schema::TYPE_PK,
            'id_category' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_seo' => Schema::TYPE_INTEGER . ' NULL',
            'id_parent' => Schema::TYPE_INTEGER . ' NULL',
            'lang' => Schema::TYPE_STRING . '(6) NOT NULL',
            'title' => Schema::TYPE_STRING . '(500) NOT NULL',
            'description' => Schema::TYPE_TEXT . '(2000) NULL',
            'img' => Schema::TYPE_STRING . '(500) NULL',
            'sort' => Schema::TYPE_INTEGER . '(5) NOT NULL',
            'dateCreated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
            'dateUpdated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%blogCategory}}');
    }
}
