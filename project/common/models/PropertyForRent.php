<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "PropertyForRent".
 *
 * @property int $id
 */
class PropertyForRent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PropertyForRent';
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
