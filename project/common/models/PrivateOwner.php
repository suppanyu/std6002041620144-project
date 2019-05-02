<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "PrivateOwner".
 *
 * @property int $id
 */
class PrivateOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PrivateOwner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
        ];
    }
}
