<?php
/**
 * Created by PhpStorm.
 * User: DmitryPit
 * Date: 01.03.2017
 * Time: 17:06
 */
namespace app\models\customer;

use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
}