<?php

/** 
* Team: 404NotFound 
* Coding by Que MingKai 2012411 
*           2023/2/5 
* Russian-Ukraine War news table model class 
*/

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%ru_news}}".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $url
 * @property string|null $author
 * @property string|null $date
 * @property string|null $description
 * @property string|null $img_path
 */
class RuNews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ru_news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'url', 'author', 'date', 'description', 'img_path'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'url' => 'Url',
            'author' => 'Author',
            'date' => 'Date',
            'description' => 'Description',
            'img_path' => 'Img Path',
        ];
    }

    /**
     * {@inheritdoc}
     * @return RuNewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RuNewsQuery(get_called_class());
    }
}