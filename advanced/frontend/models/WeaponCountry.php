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
 * This is the model class for table "weapon_country".
 *
 * @property int $countryid
 * @property string $countryname
 *
 * @property Weapons[] $weapons
 */
class WeaponCountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weapon_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countryid', 'countryname'], 'required'],
            [['countryid'], 'integer'],
            [['countryname'], 'string', 'max' => 20],
            [['countryid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'countryid' => 'Countryid',
            'countryname' => 'Countryname',
        ];
    }

    /**
     * Gets query for [[Weapons]].
     *
     * @return \yii\db\ActiveQuery|WeaponsQuery
     */
    public function getWeapons()
    {
        return $this->hasMany(Weapons::class, ['country' => 'countryid']);
    }

    /**
     * {@inheritdoc}
     * @return WeaponCountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WeaponCountryQuery(get_called_class());
    }
}
