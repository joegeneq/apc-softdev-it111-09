<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Registrar;

/**
 * RegistrarSearch represents the model behind the search form about `app\models\Registrar`.
 */
class RegistrarSearch extends Registrar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'registrar_age'], 'integer'],
            [['registrar_fname', 'registrar_midname', 'registrar_lname', 'registrar_address', 'registrar_gender', 'registrar_contact', 'registrar_birthdate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Registrar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'registrar_age' => $this->registrar_age,
            'registrar_birthdate' => $this->registrar_birthdate,
        ]);

        $query->andFilterWhere(['like', 'registrar_fname', $this->registrar_fname])
            ->andFilterWhere(['like', 'registrar_midname', $this->registrar_midname])
            ->andFilterWhere(['like', 'registrar_lname', $this->registrar_lname])
            ->andFilterWhere(['like', 'registrar_address', $this->registrar_address])
            ->andFilterWhere(['like', 'registrar_gender', $this->registrar_gender])
            ->andFilterWhere(['like', 'registrar_contact', $this->registrar_contact]);

        return $dataProvider;
    }
}
