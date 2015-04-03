<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $student_fname
 * @property string $student_midname
 * @property string $student_lname
 * @property string $student_address
 * @property integer $student_age
 * @property string $student_gender
 * @property string $student_birthdate
 * @property integer $account_id
 * @property integer $year_level_id
 *
 * @property Grade[] $grades
 * @property Parent[] $parents
 * @property SchoolYear[] $schoolYears
 * @property Account $account
 * @property YearLevel $yearLevel
 * @property Subject[] $subjects
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
            [['id', 'account_id', 'year_level_id'], 'required'],
            [['id', 'student_age', 'account_id', 'year_level_id'], 'integer'],
            [['student_birthdate'], 'safe'],
            [['student_fname', 'student_midname', 'student_lname'], 'string', 'max' => 30],
            [['student_address'], 'string', 'max' => 45],
            [['student_gender'], 'string', 'max' => 6]
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
            'student_midname' => 'Student Midname',
            'student_lname' => 'Student Lname',
            'student_address' => 'Student Address',
            'student_age' => 'Student Age',
            'student_gender' => 'Student Gender',
            'student_birthdate' => 'Student Birthdate',
            'account_id' => 'Account ID',
            'year_level_id' => 'Year Level ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrades()
    {
        return $this->hasMany(Grade::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParents()
    {
        return $this->hasMany(Parent::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchoolYears()
    {
        return $this->hasMany(SchoolYear::className(), ['student_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(Account::className(), ['id' => 'account_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYearLevel()
    {
        return $this->hasOne(YearLevel::className(), ['id' => 'year_level_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['student_id' => 'id']);
    }
}
