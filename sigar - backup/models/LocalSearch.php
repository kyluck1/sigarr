<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LOCAL;

/**
 * LocalSearch represents the model behind the search form of `app\models\LOCAL`.
 */
class LocalSearch extends LOCAL
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['LOCAL_PK', 'HIERARQUIA_FK', 'USUARIO_FK'], 'number'],
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
        $query = LOCAL::find();

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
            'LOCAL_PK' => $this->LOCAL_PK,
            'HIERARQUIA_FK' => $this->HIERARQUIA_FK,
            'USUARIO_FK' => $this->USUARIO_FK,
        ]);

        return $dataProvider;
    }
}
