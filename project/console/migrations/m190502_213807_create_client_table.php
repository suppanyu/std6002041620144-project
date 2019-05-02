<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190502_213807_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'client_no' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
