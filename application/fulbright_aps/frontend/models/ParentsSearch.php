<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Parents;

/**
 * ParentsSearch represents the model behind the search form about `app\models\Parents`.
 */
class ParentsSearch extends Parents
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_age', 'student_id'], 'integer'],
            [['parent_fname', 'parent_midname', 'parent_lname', 'parent_address', 'parent_gender', 'parent_occupation', 'parent_contact', 'parent_email'], 'safe'],
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
        $query = Parents::find();

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
            'parent_age' => $this->parent_age,
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'parent_fname', $this->parent_fname])
            ->andFilterWhere(['like', 'parent_midname', $this->parent_midname])
            ->andFilterWhere(['like', 'parent_lname', $this->parent_lname])
            ->andFilterWhere(['like', 'parent_address', $this->parent_address])
            ->andFilterWhere(['like', 'parent_gender', $this->parent_gender])
            ->andFilterWhere(['like', 'parent_occupation', $this->parent_occupation])
            ->andFilterWhere(['like', 'parent_contact', $this->parent_contact])
            ->andFilterWhere(['like', 'parent_email', $this->parent_email]);

        return $dataProvider;
    }
}
