<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parents".
 *
 * @property integer $id
 * @property string $parents_fname
 * @property string $parents_lname
 * @property string $parents_address
 * @property string $parents_contact
 * @property string $parents_remarks
 *
 * @property Student[] $students
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
            [['parents_fname', 'parents_lname', 'parents_address', 'parents_contact', 'parents_remarks'], 'required'],
            [['parents_fname', 'parents_lname', 'parents_address', 'parents_contact', 'parents_remarks'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parents_fname' => 'Parents First Name',
            'parents_lname' => 'Parents Last Name',
            'parents_address' => 'Parents Address',
            'parents_contact' => 'Parents Contact',
            'parents_remarks' => 'Parents Remarks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['parents_id' => 'id']);
    }
}
