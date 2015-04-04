<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "year_level".
 *
 * @property integer $id
 * @property string $year_level_name
 * @property integer $section_id
 *
 * @property Student[] $students
 * @property Section $section
 */
class YearLevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'year_level';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'section_id'], 'required'],
            [['id', 'section_id'], 'integer'],
            [['year_level_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year_level_name' => 'Year Level Name',
            'section_id' => 'Section ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['year_level_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }
}
