<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/10
 *  Russia-Ukraine backend
 */
namespace backend\models;

use Yii;

/**
 * This is the model class for table "team_members".
 *
 * @property string $m_name
 * @property int $Student_id
 * @property string $Login
 * @property string $pass_word
 */
class TeamMembers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'team_members';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_name', 'Student_id', 'Login', 'pass_word'], 'required'],
            [['Student_id'], 'integer'],
            [['m_name'], 'string', 'max' => 10],
            [['Login'], 'string', 'max' => 500],
            [['pass_word'], 'string', 'max' => 20],
            [['Student_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'm_name' => 'M Name',
            'Student_id' => 'Student ID',
            'Login' => 'Login',
            'pass_word' => 'Pass Word',
        ];
    }
}
