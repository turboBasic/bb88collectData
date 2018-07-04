<?php

namespace app\models;

use Yii;
use yii\db;

/**
 * This is the model class for table "electricity".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $date
 * @property int $electricityMeter
 */
class Electricity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'electricity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['electricityMeter', 'required'],
            ['date', 'default', 'value' => date('Y-m-d') ],
            ['electricityMeter', 'match', 'pattern' => '/^[0-9]+$/' ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'electricityMeter' => 'Electricity Meter',
        ];
    }


    public function saveDateFormat($date) {
        $date = Yii::$app->formatter->asDatetime($date, "yyyy-MM-dd HH:mm:ss");
        if($date == "1970-01-01 00:00:00")
            return date('Y-m-d H:i:s' );
       else
            return $date;
    }


    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $this->date = $this->saveDateFormat($this->date);
            return true;
        }
        return false;
    }


}
