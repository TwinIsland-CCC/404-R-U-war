<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "weapons".
 *
 * @property string $name
 * @property int $country
 * @property string $content
 * @property int $kind
 *
 * @property WeaponCountry $country0
 * @property WeaponKind $kind0
 */
class Weapons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weapons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'country', 'content', 'kind'], 'required'],
            [['country', 'kind'], 'integer'],
            [['name'], 'string', 'max' => 60],
            [['content'], 'string', 'max' => 1000],
            [['name'], 'unique'],
            [['country'], 'exist', 'skipOnError' => true, 'targetClass' => WeaponCountry::class, 'targetAttribute' => ['country' => 'countryid']],
            [['kind'], 'exist', 'skipOnError' => true, 'targetClass' => WeaponKind::class, 'targetAttribute' => ['kind' => 'kind_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'country' => 'Country',
            'content' => 'Content',
            'kind' => 'Kind',
        ];
    }

    /**
     * Gets query for [[Country0]].
     *
     * @return \yii\db\ActiveQuery|WeaponCountryQuery
     */
    public function getCountry0()
    {
        return $this->hasOne(WeaponCountry::class, ['countryid' => 'country']);
    }

    /**
     * Gets query for [[Kind0]].
     *
     * @return \yii\db\ActiveQuery|WeaponKindQuery
     */
    public function getKind0()
    {
        return $this->hasOne(WeaponKind::class, ['kind_id' => 'kind']);
    }

    /**
     * {@inheritdoc}
     * @return WeaponsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WeaponsQuery(get_called_class());
    }
}
