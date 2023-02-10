<?php
/**
 *  Team: 404NotFound
 *  Coding by Luo XinKe 2013622
 *            2023/2/10
 *  Russia-Ukraine backend
 */
namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Suggestion;

/**
 * SuggestionSearch represents the model behind the search form of `backend\models\Suggestion`.
 */
class SuggestionSearch extends Suggestion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['username', 'email', 'suggestion'], 'safe'],
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
        $query = Suggestion::find();

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
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'suggestion', $this->suggestion]);

        return $dataProvider;
    }
}
