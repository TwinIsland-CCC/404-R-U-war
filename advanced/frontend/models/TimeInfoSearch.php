<?php

namespace app\Models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\Models\TimeInfo;

/**
 * TimeInfoSearch represents the model behind the search form of `app\Models\TimeInfo`.
 */
class TimeInfoSearch extends TimeInfo
{
    public $datetime_start;
    public $datetime_end;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'event', 'url'], 'safe'],
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
        $query = TimeInfo::find();

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
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'event', $this->event])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
