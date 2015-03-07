<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adviser".
 *
 * @property integer $id
 * @property string $adviser_fname
 * @property string $adviser_lname
 * @property string $adviser_address
 * @property integer $adviser_contact
 * @property string $adviser_uname
 * @property string $adviser_password
 * @property string $adviser_emailadd
 */
class Adviser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adviser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adviser_fname', 'adviser_lname', 'adviser_address', 'adviser_contact', 'adviser_uname', 'adviser_password', 'adviser_emailadd'], 'required'],
            [['adviser_contact'], 'integer'],
            [['adviser_fname', 'adviser_lname', 'adviser_address', 'adviser_uname', 'adviser_password', 'adviser_emailadd'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adviser_fname' => 'Adviser Firt Name',
            'adviser_lname' => 'Adviser Last Name',
            'adviser_address' => 'Adviser Address',
            'adviser_contact' => 'Adviser Contact',
            'adviser_uname' => 'Adviser Username',
            'adviser_password' => 'Adviser Password',
            'adviser_emailadd' => 'Adviser Email Address',
        ];
    }
}
