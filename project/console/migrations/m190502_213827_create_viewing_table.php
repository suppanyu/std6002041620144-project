<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%viewing}}`.
 */
class m190502_213827_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'viewing_no' => $this->string(200)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
