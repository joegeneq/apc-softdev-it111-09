<?php

namespace app;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * modeStudentSearch represents the model behind the search form about `app\models\Student`.
 */
class modeStudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parents_id'], 'integer'],
            [['student_fname', 'student_lname', 'student_section', 'student_address'], 'safe'],
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
            'parents_id' => $this->parents_id,
        ]);

        $query->andFilterWhere(['like', 'student_fname', $this->student_fname])
            ->andFilterWhere(['like', 'student_lname', $this->student_lname])
            ->andFilterWhere(['like', 'student_section', $this->student_section])
            ->andFilterWhere(['like', 'student_address', $this->student_address]);

        return $dataProvider;
    }
}
