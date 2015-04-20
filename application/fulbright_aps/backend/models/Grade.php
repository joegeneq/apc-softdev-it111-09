<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "grade".
 *
 * @property integer $id
 * @property string $grade_remarks
 * @property string $grade_date_submitted
 * @property integer $student_id
 * @property integer $teacher_id
 *
 * @property Student $student
 * @property Teacher $teacher
 * @property Subject[] $subjects
 */
class Grade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id', 'teacher_id'], 'required'],
            [['id', 'student_id', 'teacher_id'], 'integer'],
            [['grade_date_submitted'], 'safe'],
            [['grade_remarks'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade_remarks' => 'Grade Remarks',
            'grade_date_submitted' => 'Grade Date Submitted',
            'student_id' => 'Student ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
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
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['grade_id' => 'id']);
    }
}
