<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "weapons_company3".
 *
 * @property string $E_name
 * @property string $url
 * @property string $C_name
 */
class WeaponsCompany3 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weapons_company3';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['E_name', 'url', 'C_name'], 'required'],
            [['E_name', 'C_name'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 60],
            [['E_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'E_name' => 'E Name',
            'url' => 'Url',
            'C_name' => 'C Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return WeaponsCompany3Query the active query used by this AR class.
     */
    public static function find()
    {
        return new WeaponsCompany3Query(get_called_class());
    }
}
