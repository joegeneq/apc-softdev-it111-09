<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Adviser;

/**
 * AdviserSearch represents the model behind the search form about `app\models\Adviser`.
 */
class AdviserSearch extends Adviser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'adviser_contact'], 'integer'],
            [['adviser_fname', 'adviser_lname', 'adviser_address', 'adviser_uname', 'adviser_password', 'adviser_emailadd'], 'safe'],
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
        $query = Adviser::find();

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
            'adviser_contact' => $this->adviser_contact,
        ]);

        $query->andFilterWhere(['like', 'adviser_fname', $this->adviser_fname])
            ->andFilterWhere(['like', 'adviser_lname', $this->adviser_lname])
            ->andFilterWhere(['like', 'adviser_address', $this->adviser_address])
            ->andFilterWhere(['like', 'adviser_uname', $this->adviser_uname])
            ->andFilterWhere(['like', 'adviser_password', $this->adviser_password])
            ->andFilterWhere(['like', 'adviser_emailadd', $this->adviser_emailadd]);

        return $dataProvider;
    }
}
