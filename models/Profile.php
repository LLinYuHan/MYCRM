<?php

namespace app\models;

use yii\db\ActiveRecord;

class Profile extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%profile}}";
    }


    public function attributeLabels()
    {
        return [
            'truename' => '真实姓名',
            'age' => '年龄',
            'sex' => '性别',
            'birthday' => '出生日期',
            'nickname' => '昵称',
            'company' => '公司/企业',
        ];
    }
}