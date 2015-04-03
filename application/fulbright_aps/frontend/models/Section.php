<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property string $section_name
 * @property string $section_description
 * @property integer $teacher_id
 *
 * @property Teacher $teacher
 * @property YearLevel[] $yearLevels
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id'], 'required'],
            [['id', 'teacher_id'], 'integer'],
            [['section_name', 'section_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_name' => 'Section Name',
            'section_description' => 'Section Description',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYearLevels()
    {
        return $this->hasMany(YearLevel::className(), ['section_id' => 'id']);
    }
}
