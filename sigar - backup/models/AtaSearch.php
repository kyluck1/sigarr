<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ATA;

/**
 * AtaSearch represents the model behind the search form of `app\models\ATA`.
 */
class AtaSearch extends ATA
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ATA_PK', 'LOCAL_FK'], 'number'],
            [['TITULO', 'DATA', 'HR_INI', 'HR_FIM', 'ASSUNTOS', 'PROXIMOS_PASSOS'], 'safe'],
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
        $query = ATA::find();

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
            'ATA_PK' => $this->ATA_PK,
            'LOCAL_FK' => $this->LOCAL_FK,
        ]);

        $query->andFilterWhere(['like', 'TITULO', $this->TITULO])
            ->andFilterWhere(['like', 'DATA', $this->DATA])
            ->andFilterWhere(['like', 'HR_INI', $this->HR_INI])
            ->andFilterWhere(['like', 'HR_FIM', $this->HR_FIM])
            ->andFilterWhere(['like', 'ASSUNTOS', $this->ASSUNTOS])
            ->andFilterWhere(['like', 'PROXIMOS_PASSOS', $this->PROXIMOS_PASSOS]);

        return $dataProvider;
    }
}
