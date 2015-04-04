<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SchoolYear;

/**
 * SchoolYearSearch represents the model behind the search form about `app\models\SchoolYear`.
 */
class SchoolYearSearch extends SchoolYear
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'integer'],
            [['school_year_name', 'school_year_description'], 'safe'],
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
        $query = SchoolYear::find();

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
            'student_id' => $this->student_id,
        ]);

        $query->andFilterWhere(['like', 'school_year_name', $this->school_year_name])
            ->andFilterWhere(['like', 'school_year_description', $this->school_year_description]);

        return $dataProvider;
    }
}
