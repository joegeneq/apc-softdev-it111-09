<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Section;

/**
 * SectionSearch represents the model behind the search form about `app\models\Section`.
 */
class SectionSearch extends Section
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id'], 'integer'],
            [['section_name', 'section_description'], 'safe'],
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
        $query = Section::find();

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
            'teacher_id' => $this->teacher_id,
        ]);

        $query->andFilterWhere(['like', 'section_name', $this->section_name])
            ->andFilterWhere(['like', 'section_description', $this->section_description]);

        return $dataProvider;
    }
}
