<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "electrometer".
 *
 * @property string $datetime
 * @property int $kwh
 */
class Electrometer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'electrometer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['kwh', 'required'],
            ['datetime', 'unique'],
            ['datetime', 'default', 'value' => date('Y-m-d H:i:s')],
            ['datetime', 'datetime', 'format' => 'yyyy-MM-dd HH:mm:ss'],
            ['kwh', 'match', 'pattern' => '/^[0-9]{1,15}$/'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'datetime' => 'Date and time of data collection',
            'kwh' => 'Electricity meter reading (kW⋅h)',
        ];
    }
}
