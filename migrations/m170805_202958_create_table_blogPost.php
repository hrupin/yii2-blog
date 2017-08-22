<?php

use yii\db\Schema;
use yii\db\Migration;

class m170805_202958_create_table_blogPost extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blogPost}}', [
            'id' => Schema::TYPE_PK,
            'id_post' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_category' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_author' => Schema::TYPE_INTEGER . ' NOT NULL',
            'id_tag' => Schema::TYPE_STRING . '(100)',
            'id_seo' => Schema::TYPE_INTEGER . '(100)',
            'lang' => Schema::TYPE_STRING . '(6) NOT NULL',
            'title' => Schema::TYPE_STRING . '(255) NOT NULL',
            'description' => Schema::TYPE_STRING . '(500) NULL',
            'content' => Schema::TYPE_TEXT . '(15000) NULL',
            'thumbnail' => Schema::TYPE_STRING . '(255) NULL',
            'img' => Schema::TYPE_STRING . '(255) NULL',
            'permissionToComment' => Schema::TYPE_BOOLEAN,
            'dateCreated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
            'dateUpdated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%blogPost}}');
    }
}
