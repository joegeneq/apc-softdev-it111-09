<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\YearLevel;

/**
 * YearLevelSearch represents the model behind the search form about `app\models\YearLevel`.
 */
class YearLevelSearch extends YearLevel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_id'], 'integer'],
            [['year_level_name'], 'safe'],
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
        $query = YearLevel::find();

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
            'section_id' => $this->section_id,
        ]);

        $query->andFilterWhere(['like', 'year_level_name', $this->year_level_name]);

        return $dataProvider;
    }
}
