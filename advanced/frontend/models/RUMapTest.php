<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%ru_map_test}}".
 *
 * @property int $m_id
 * @property string|null $m_name
 * @property string|null $time
 */
class RUMapTest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ru_map_test}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_name', 'time'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'M ID',
            'm_name' => 'M Name',
            'time' => 'Time',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RUMapTestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RUMapTestQuery(get_called_class());
    }
}
