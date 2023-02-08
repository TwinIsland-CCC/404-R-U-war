<?php
/** 
* Team: 404NotFound 
* Coding by Su YuJia 2011068
*           2023/2/7
* User Suggestion
*/
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "suggestion".
 *
 * @property string $username
 * @property string $email
 * @property string $suggestion
 * @property int $id
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
            [['username', 'email', 'suggestion', 'id'], 'required'],
            [['id'], 'integer'],
            [['username', 'email'], 'string', 'max' => 225],
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
            'username' => 'Username',
            'email' => 'Email',
            'suggestion' => 'Suggestion',
            'id' => 'ID',
        ];
    }
}
