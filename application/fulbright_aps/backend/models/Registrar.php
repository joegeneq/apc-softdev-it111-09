<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registrar".
 *
 * @property integer $id
 * @property string $registrar_fname
 * @property string $registrar_midname
 * @property string $registrar_lname
 * @property string $registrar_address
 * @property integer $registrar_age
 * @property string $registrar_gender
 * @property string $registrar_contact
 * @property string $registrar_birthdate
 *
 * @property Subject[] $subjects
 */
class Registrar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registrar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'registrar_age'], 'integer'],
            [['registrar_birthdate'], 'safe'],
            [['registrar_fname', 'registrar_midname', 'registrar_lname', 'registrar_contact'], 'string', 'max' => 45],
            [['registrar_address'], 'string', 'max' => 70],
            [['registrar_gender'], 'string', 'max' => 6]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'registrar_fname' => 'Registrar Fname',
            'registrar_midname' => 'Registrar Midname',
            'registrar_lname' => 'Registrar Lname',
            'registrar_address' => 'Registrar Address',
            'registrar_age' => 'Registrar Age',
            'registrar_gender' => 'Registrar Gender',
            'registrar_contact' => 'Registrar Contact',
            'registrar_birthdate' => 'Registrar Birthdate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjects()
    {
        return $this->hasMany(Subject::className(), ['registrar_id' => 'id']);
    }
}
