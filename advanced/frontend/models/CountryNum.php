<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/12
* Russian-Ukraine War weapons's producer country number main class
*/

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%country_num}}".
 *
 * @property string $country_name
 * @property int $cid
 * @property int $num
 *
 * @property WeaponsCompany[] $weaponsCompanies
 */
class CountryNum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%country_num}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name'], 'required'],
            [['num'], 'integer'],
            [['country_name'], 'string', 'max' => 100],
            [['country_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country_name' => 'Country Name',
            'cid' => 'Cid',
            'num' => 'Num',
        ];
    }

    /**
     * Gets query for [[WeaponsCompanies]].
     *
     * @return \yii\db\ActiveQuery|WeaponsCompanyQuery
     */
    public function getWeaponsCompanies()
    {
        return $this->hasMany(WeaponsCompany::class, ['cid' => 'cid']);
    }

    /**
     * {@inheritdoc}
     * @return CountryNumQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountryNumQuery(get_called_class());
    }
}
