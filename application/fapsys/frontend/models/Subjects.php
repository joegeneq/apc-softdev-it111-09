<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property integer $id
 * @property string $subject_name
 * @property string $subject_desc
 * @property string $subject_remarks
 * @property integer $grades_id
 * @property integer $adviser_id
 * @property integer $student_id
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject_name', 'subject_desc', 'subject_remarks', 'grades_id', 'adviser_id', 'student_id'], 'required'],
            [['grades_id', 'adviser_id', 'student_id'], 'integer'],
            [['subject_name', 'subject_desc', 'subject_remarks'], 'string', 'max' => 45]
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
            'subject_desc' => 'Subject Description',
            'subject_remarks' => 'Subject Remarks',
            'grades_id' => 'Grades ID',
            'adviser_id' => 'Adviser ID',
            'student_id' => 'Student ID',
        ];
    }
}
