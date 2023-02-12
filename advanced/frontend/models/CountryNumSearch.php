<?php

/**   
* Team: 404NotFound   
* Coding by Que MingKai 2012411   
*          2023/2/12
* Russian-Ukraine War weapons's producer country number search class
*/

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CountryNum;

/**
 * CountryNumSearch represents the model behind the search form of `frontend\models\CountryNum`.
 */
class CountryNumSearch extends CountryNum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country_name'], 'safe'],
            [['cid', 'num'], 'integer'],
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
        $query = CountryNum::find();

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
            'cid' => $this->cid,
            'num' => $this->num,
        ]);

        $query->andFilterWhere(['like', 'country_name', $this->country_name]);

        return $dataProvider;
    }
}
