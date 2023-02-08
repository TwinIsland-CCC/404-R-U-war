<?php
/** 
* Team: 404NotFound 
* Coding by Su YuJia 2011068
*           2023/2/8
* Russian-Casualties Map
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "r_casualties".
 *
 * @property int|null $num
 * @property string $time
 */
class RCasualties extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'r_casualties';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num'], 'integer'],
            [['time'], 'required'],
            [['time'], 'safe'],
            [['time'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'time' => 'Time',
        ];
    }
}
