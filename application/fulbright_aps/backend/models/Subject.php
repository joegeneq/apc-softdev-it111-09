<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property integer $id
 * @property string $subject_name
 * @property string $subect_description
 * @property integer $grade_id
 * @property integer $registrar_id
 * @property integer $student_id
 * @property integer $teacher_id
 *
 * @property Grade $grade
 * @property Registrar $registrar
 * @property Student $student
 * @property Teacher $teacher
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'grade_id', 'registrar_id', 'student_id', 'teacher_id'], 'required'],
            [['id', 'grade_id', 'registrar_id', 'student_id', 'teacher_id'], 'integer'],
            [['subject_name'], 'string', 'max' => 20],
            [['subect_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_name' => 'Subject Name',
            'subect_description' => 'Subect Description',
            'grade_id' => 'Grade ID',
            'registrar_id' => 'Registrar ID',
            'student_id' => 'Student ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrade()
    {
        return $this->hasOne(Grade::className(), ['id' => 'grade_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrar()
    {
        return $this->hasOne(Registrar::className(), ['id' => 'registrar_id']);
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
}
