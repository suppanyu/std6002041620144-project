<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%privateowner}}`.
 */
class m190502_213819_create_privateowner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%privateowner}}', [
            'id' => $this->primaryKey(),
            'privateowner_no' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%privateowner}}');
    }
}
