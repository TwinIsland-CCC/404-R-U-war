<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "time_info".
 *
 * @property string $date
 * @property string $event
 * @property string $url
 */
class TimeInfo extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'event', 'url'], 'required'],
            [['date'], 'safe'],
            [['event', 'url'], 'string'],
            [['date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'event' => 'Event',
            'url' => 'Url',
        ];
    }
}
