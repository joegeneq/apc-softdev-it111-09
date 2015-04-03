<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_age', 'account_id', 'year_level_id'], 'integer'],
            [['student_fname', 'student_midname', 'student_lname', 'student_address', 'student_gender', 'student_birthdate'], 'safe'],
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
        $query = Student::find();

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
            'student_age' => $this->student_age,
            'student_birthdate' => $this->student_birthdate,
            'account_id' => $this->account_id,
            'year_level_id' => $this->year_level_id,
        ]);

        $query->andFilterWhere(['like', 'student_fname', $this->student_fname])
            ->andFilterWhere(['like', 'student_midname', $this->student_midname])
            ->andFilterWhere(['like', 'student_lname', $this->student_lname])
            ->andFilterWhere(['like', 'student_address', $this->student_address])
            ->andFilterWhere(['like', 'student_gender', $this->student_gender]);

        return $dataProvider;
    }
}
