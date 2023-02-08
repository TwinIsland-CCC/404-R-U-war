<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/8
 *  Russia-Ukraine war weapons display
 */
namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\WeaponsCompany3;

/**
 * WeaponsCompany3Search represents the model behind the search form of `frontend\models\WeaponsCompany3`.
 */
class WeaponsCompany3Search extends WeaponsCompany3
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['E_name', 'url', 'C_name'], 'safe'],
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
        $query = WeaponsCompany3::find();

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
        $query->andFilterWhere(['like', 'E_name', $this->E_name])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'C_name', $this->C_name]);

        return $dataProvider;
    }
}
