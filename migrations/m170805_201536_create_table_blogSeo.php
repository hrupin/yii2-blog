<?php

use yii\db\Schema;
use yii\db\Migration;

class m170805_201536_create_table_blogSeo extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%blogSeo}}', [
            'id' => Schema::TYPE_PK,
            'id_seo' => Schema::TYPE_INTEGER . ' NOT NULL',
            'lang' => Schema::TYPE_STRING . '(6) NOT NULL',
            'tag' => Schema::TYPE_STRING . '(15) NOT NULL',
            'value' => Schema::TYPE_TEXT . '(150) NULL',
            'dateCreated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
            'dateUpdated' => Schema::TYPE_INTEGER . '(12) NOT NULL',
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%blogSeo}}');
    }
}
