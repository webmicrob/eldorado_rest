<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%album}}`.
 */
class m190410_222014_create_album_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%album}}', [
            'id' => $this->primaryKey(),
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'image' => Schema::TYPE_STRING,
            'price' => Schema::TYPE_DECIMAL,
            'artist' => Schema::TYPE_STRING,
            'category' => Schema::TYPE_STRING,
        ]);

        $this->insert('album', [
            'name' => 'test 1',
            'price' => '11',
        ]);
        $this->insert('album', [
            'name' => 'test 2',
            'price' => '12',
        ]);
        $this->insert('album', [
            'name' => 'test 3',
            'price' => '13',
        ]);
        $this->insert('album', [
            'name' => 'test 4',
            'price' => '14',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%album}}');
    }
}
