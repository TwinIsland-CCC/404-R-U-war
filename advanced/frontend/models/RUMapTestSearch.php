<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\RUMapTest;

/**
 *  Team: 404NotFound
 *  Coding by Que MingKai 2012411
 *            2023/2/2
 * RUMapTestSearch represents the model behind the search form of `frontend\models\RUMapTest`.
 */
class RUMapTestSearch extends RUMapTest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_id'], 'integer'],
            [['m_name', 'time'], 'safe'],
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
        $query = RUMapTest::find();

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
            'm_id' => $this->m_id,
        ]);

        $query->andFilterWhere(['like', 'm_name', $this->m_name])
            ->andFilterWhere(['like', 'time', $this->time]);

        return $dataProvider;
    }
}
