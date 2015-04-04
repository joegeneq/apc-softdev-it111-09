<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "school_year".
 *
 * @property integer $id
 * @property string $school_year_name
 * @property string $school_year_description
 * @property integer $student_id
 *
 * @property Student $student
 */
class SchoolYear extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_year';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'required'],
            [['id', 'student_id'], 'integer'],
            [['school_year_name', 'school_year_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_year_name' => 'School Year Name',
            'school_year_description' => 'School Year Description',
            'student_id' => 'Student ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
