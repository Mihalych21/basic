<?php


namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\Html;

class IndexForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function rules()
    {
        return [
            [['name', 'tel', 'text'], 'required'],
            ['name', 'string', 'length' => [3, 100]],
            [['email'], 'email'],
            ['tel', 'string', 'length' => [6, 15]],
            ['text', 'string', 'length' => [2, 10000]],
        ];
    }

    /* Фильтрация POST данных */
    public static function clrPostData($arr)
    {
        foreach ($arr as $key => $v) {
            if ($key == '_csrf') {
                continue;
            }
            $res[$key] = Html::encode($arr[$key]);
        }
        return $res;
    }

    public static function sendMail($data)
    {
        return true;
    }

}