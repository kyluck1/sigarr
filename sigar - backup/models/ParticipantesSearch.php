<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PARTICIPANTES;

/**
 * ParticipantesSearch represents the model behind the search form of `app\models\PARTICIPANTES`.
 */
class ParticipantesSearch extends PARTICIPANTES
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARTICIPANTES_PK', 'ATA_FK'], 'number'],
            [['NOME', 'SETOR', 'EMAIL'], 'safe'],
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
        $query = PARTICIPANTES::find();

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
            'PARTICIPANTES_PK' => $this->PARTICIPANTES_PK,
            'ATA_FK' => $this->ATA_FK,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME])
            ->andFilterWhere(['like', 'SETOR', $this->SETOR])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL]);

        return $dataProvider;
    }
}
