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
 * This is the model class for table "suggestion".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $suggestion
 */
class Suggestion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suggestion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'username', 'email', 'suggestion'], 'required'],
            [['id'], 'integer'],
            [['username', 'email'], 'string', 'max' => 255],
            [['suggestion'], 'string', 'max' => 800],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'suggestion' => 'Suggestion',
        ];
    }
}
