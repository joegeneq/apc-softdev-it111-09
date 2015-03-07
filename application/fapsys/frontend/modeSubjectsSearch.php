<?php

namespace app;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subjects;

/**
 * modeSubjectsSearch represents the model behind the search form about `app\models\Subjects`.
 */
class modeSubjectsSearch extends Subjects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'grades_id', 'adviser_id', 'student_id'], 'integer'],
            [['subject_name', 'subject_desc', 'subject_remarks'], 'safe'],
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
        $query = Subjects::find();

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
            'grades_id' => $this->grades_id,
            'adviser_id' => $this->adviser_id,
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'subject_desc', $this->subject_desc])
            ->andFilterWhere(['like', 'subject_remarks', $this->subject_remarks]);

        return $dataProvider;
    }
}
