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
use frontend\models\WeaponKind;

/**
 * WeaponKindSearch represents the model behind the search form of `frontend\models\WeaponKind`.
 */
class WeaponKindSearch extends WeaponKind
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kind_id'], 'integer'],
            [['kindname', 'E_kindname'], 'safe'],
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
        $query = WeaponKind::find();

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
            'kind_id' => $this->kind_id,
        ]);

        $query->andFilterWhere(['like', 'kindname', $this->kindname])
            ->andFilterWhere(['like', 'E_kindname', $this->E_kindname]);

        return $dataProvider;
    }
}
