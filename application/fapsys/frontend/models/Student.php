<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $student_fname
 * @property string $student_lname
 * @property string $student_section
 * @property string $student_address
 * @property integer $parents_id
 *
 * @property Parents $parents
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_fname', 'student_lname', 'student_section', 'student_address', 'parents_id'], 'required'],
            [['parents_id'], 'integer'],
            [['student_fname', 'student_lname', 'student_section', 'student_address'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_fname' => 'Student Fname',
            'student_lname' => 'Student Lname',
            'student_section' => 'Student Section',
            'student_address' => 'Student Address',
            'parents_id' => 'Parents ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParents()
    {
        return $this->hasOne(Parents::className(), ['id' => 'parents_id']);
    }
}
