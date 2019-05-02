<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%propertyforrent}}`.
 */
class m190502_213755_create_propertyforrent_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%propertyforrent}}', [
            'id' => $this->primaryKey(),
            'propertyforrent_no' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%propertyforrent}}');
    }
}
