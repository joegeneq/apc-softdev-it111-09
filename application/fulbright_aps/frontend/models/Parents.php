<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parents".
 *
 * @property integer $id
 * @property string $parent_fname
 * @property string $parent_midname
 * @property string $parent_lname
 * @property string $parent_address
 * @property integer $parent_age
 * @property string $parent_gender
 * @property string $parent_occupation
 * @property string $parent_contact
 * @property string $parent_email
 * @property integer $student_id
 *
 * @property Student $student
 */
class Parents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'student_id'], 'required'],
            [['id', 'parent_age', 'student_id'], 'integer'],
            [['parent_fname', 'parent_midname', 'parent_lname'], 'string', 'max' => 30],
            [['parent_address'], 'string', 'max' => 70],
            [['parent_gender'], 'string', 'max' => 6],
            [['parent_occupation', 'parent_contact', 'parent_email'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_fname' => 'Parent Fname',
            'parent_midname' => 'Parent Midname',
            'parent_lname' => 'Parent Lname',
            'parent_address' => 'Parent Address',
            'parent_age' => 'Parent Age',
            'parent_gender' => 'Parent Gender',
            'parent_occupation' => 'Parent Occupation',
            'parent_contact' => 'Parent Contact',
            'parent_email' => 'Parent Email',
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
