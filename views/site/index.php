<?php

use yii\widgets\ActiveForm;
//use app\models\IndexForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\MaskedInput;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a>
                </p>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <?php Pjax::begin([
        'clientOptions' => [
            'method' => 'POST',
            'url' => '/',
            'container' => '#my-modal',
        ],
        'enablePushState' => false, // не обновлять url
        'formSelector' => '#index-form',
        'timeout' => '20000',

    ]);
    ?>
    <?php
    $form = ActiveForm::begin([
        'id' => 'index-form',
        'options' => [
            'action' => '/',
            'data-pjax' => true
        ],
    ]);
    ?>

    <div class="group">
        <input type="text" name="name" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Ваше имя</label>
    </div>
    <div class="group">
        <input type="email" name="email" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Email</label>
    </div>
    <?php
    echo MaskedInput::widget([
        'options' => [
            'required' => true,
            'placeholder' => 'тел',
            'name' => 'tel',
            'id' => 'tel',
            'class' => 'phone input',
        ],
        'name' => 'tel',
        'mask' => '+7 (999)-999-99-99',
    ]);
    ?>

    <div class="group">
        <textarea name="text" required></textarea>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Текст сообщения</label>
    </div>
    <button type="submit" class="btn btn-success">Отправить</button>
    <?php
    $form::end();
    ?>
    <?php Pjax::end(); ?>
</div>
