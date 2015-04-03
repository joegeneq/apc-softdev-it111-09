<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property integer $id
 * @property string $teacher_fname
 * @property string $teacher_midname
 * @property string $teacher_lname
 * @property string $teacher_address
 * @property integer $teacher_age
 * @property string $teacher_gender
 * @property string $teacher_contact
 * @property string $teacher_birthdate
 * @property integer $account_id
 *
 * @property Grade[] $grades
 * @property Section[] $sections
 * @property Subject[] $subjects
 * @property Account $account
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'account_id'], 'required'],
            [['id', 'teacher_age', 'account_id'], 'integer'],
            [['teacher_birthdate'], 'safe'],
            [['teacher_fname', 'teacher_midname', 'teacher_lname'], 'string', 'max' => 30],
            [['teacher_address'], 'string', 'max' => 70],
            [['teacher_gender'], 'string', 'max' => 6],
            [['teacher_contact'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'teacher_fname' => 'Teacher Fname',
            'teacher_midname' => 'Teacher Midname',
            'teacher_lname' => 'Teacher Lname',
            'teacher_address' => 'Teacher Address',
            'teacher_age' => 'Teacher Age',
            'teacher_gender' => 'Teacher Gender',
            'teacher_contact' => 'Teacher Contact',
            'teacher_birthdate' => 'Teacher Birthdate',
            'account_id' => 'Account ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }
}
