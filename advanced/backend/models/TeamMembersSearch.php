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
use backend\models\TeamMembers;

/**
 * TeamMembersSearch represents the model behind the search form of `backend\models\TeamMembers`.
 */
class TeamMembersSearch extends TeamMembers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['m_name', 'Login', 'pass_word'], 'safe'],
            [['Student_id'], 'integer'],
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
        $query = TeamMembers::find();

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
            'Student_id' => $this->Student_id,
        ]);

        $query->andFilterWhere(['like', 'm_name', $this->m_name])
            ->andFilterWhere(['like', 'Login', $this->Login])
            ->andFilterWhere(['like', 'pass_word', $this->pass_word]);

        return $dataProvider;
    }
}
