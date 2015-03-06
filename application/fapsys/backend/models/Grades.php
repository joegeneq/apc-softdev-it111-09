<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grades".
 *
 * @property integer $id
 * @property string $grade_desc
 */
class Grades extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade_desc'], 'required'],
            [['grade_desc'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'grade_desc' => 'Grade Desc',
        ];
    }
}
