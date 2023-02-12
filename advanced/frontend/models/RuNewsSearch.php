<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/5   
* Russian-Ukraine War news table search class   
*/

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RuNews;

/**
 * RuNewsSearch represents the model behind the search form of `frontend\models\RuNews`.
 */
class RuNewsSearch extends RuNews
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'comment_num'], 'integer'],
            [['title', 'url', 'author', 'date', 'description', 'img_path'], 'safe'],
            [['score'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = RuNews::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'comment_num' => $this->comment_num,
            'score' => $this->score,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'img_path', $this->img_path]);

        return $dataProvider;
    }
}
