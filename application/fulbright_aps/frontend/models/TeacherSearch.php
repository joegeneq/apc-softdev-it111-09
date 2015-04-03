<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_age', 'account_id'], 'integer'],
            [['teacher_fname', 'teacher_midname', 'teacher_lname', 'teacher_address', 'teacher_gender', 'teacher_contact', 'teacher_birthdate'], 'safe'],
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
        $query = Teacher::find();

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
            'teacher_age' => $this->teacher_age,
            'teacher_birthdate' => $this->teacher_birthdate,
            'account_id' => $this->account_id,
        ]);

        $query->andFilterWhere(['like', 'teacher_fname', $this->teacher_fname])
            ->andFilterWhere(['like', 'teacher_midname', $this->teacher_midname])
            ->andFilterWhere(['like', 'teacher_lname', $this->teacher_lname])
            ->andFilterWhere(['like', 'teacher_address', $this->teacher_address])
            ->andFilterWhere(['like', 'teacher_gender', $this->teacher_gender])
            ->andFilterWhere(['like', 'teacher_contact', $this->teacher_contact]);

        return $dataProvider;
    }
}
