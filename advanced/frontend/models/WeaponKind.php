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
 * This is the model class for table "weapon_kind".
 *
 * @property int $kind_id
 * @property string $kindname
 * @property string $E_kindname
 *
 * @property Weapons[] $weapons
 */
class WeaponKind extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weapon_kind';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kind_id', 'kindname', 'E_kindname'], 'required'],
            [['kind_id'], 'integer'],
            [['kindname', 'E_kindname'], 'string', 'max' => 50],
            [['kind_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kind_id' => 'Kind ID',
            'kindname' => 'Kindname',
            'E_kindname' => 'E Kindname',
        ];
    }

    /**
     * Gets query for [[Weapons]].
     *
     * @return \yii\db\ActiveQuery|WeaponsQuery
     */
    public function getWeapons()
    {
        return $this->hasMany(Weapons::class, ['kind' => 'kind_id']);
    }

    /**
     * {@inheritdoc}
     * @return WeaponKindQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WeaponKindQuery(get_called_class());
    }
}
