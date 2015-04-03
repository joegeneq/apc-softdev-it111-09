<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subject;

/**
 * SubjectSearch represents the model behind the search form about `app\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'grade_id', 'registrar_id', 'student_id', 'teacher_id'], 'integer'],
            [['subject_name', 'subect_description'], 'safe'],
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
        $query = Subject::find();

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
            'grade_id' => $this->grade_id,
            'registrar_id' => $this->registrar_id,
            'student_id' => $this->student_id,
            'teacher_id' => $this->teacher_id,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'subect_description', $this->subect_description]);

        return $dataProvider;
    }
}
