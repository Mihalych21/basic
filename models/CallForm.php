<?php

namespace app\models;

use Yii;
use yii\base\Model;


class CallForm extends Model
{
    public $name;
    public $tel;
    public $call;

    public function rules()
    {
        return [
            [['name', 'tel'], 'required', 'message' => 'заполните это поле !'],
            ['name', 'string', 'length' => [3, 30]],
            ['tel', 'string', 'length' => [11, 30]],
            ['call', 'string', 'length' => 1],
        ];
    }


    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше Имя',
            'tel' => 'Номер телефона',
        ];
    }


    public function callSend()
    {
//        var_dump($this->tel);die;
        $subject = 'Просьба перезвонить';
        $name = clr_get(ucfirst($this->name));
        $tel = clr_get($this->tel);

        $body = 'Клиент &nbsp;<b style="font-size: 120%;text-shadow: 0 1px 0 #e61b05">' . $name . '</b>&nbsp; просит перезвонить.<br>' .
            'Тел. :&nbsp;&nbsp;<b style="font-size: 110%;>' . $tel . '</b>' .
            '<br><br>Сообщение отправлено с сайта <b>https://' . Yii::$app->params['siteUrl'] . '</b>';

        $success = Yii::$app->mailer->compose()
            ->setTo(Yii::$app->params['email'])
            ->setFrom([Yii::$app->params['email'] => Yii::$app->params['siteUrl']])
            ->setSubject($subject)
            ->setHtmlBody($body)
            ->send();

        if ($success) {
            if ($this->validate()) {
                $msg = '<h3 style="color:green">Спасибо, ' . $name . ', Мы Вам обязательно перезвоним</h3>';
            }
        } else
            $msg = '<h3 style="color:red">Ошибка !</h3>';

        // авт. скрытие модального окна
        $msg .= '<script>setTimeout(function() {
        $(\'#call-modal\').modal(\'hide\');
    }, 5000);</script>';
        return $msg;
    }
}