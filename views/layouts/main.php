<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Pjax;

//use y/ii\widgets\Spaceless;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="main-container">
    <header>
    </header>
    <output id="my-modal"></output>
    <div id="scroll-animate">
        <div id="scroll-animate-main">
            <div class="wrapper-parallax">
                <div class="top-menu">
                    <div class="logo"><a href="/"><img class="logo-img" src="/img/logo.png" alt=""></a></div>
                    <!-- Верхнее меню -->
                    <nav id='cssmenu'>
                        <!--                        <div id="head-mobile"></div>-->
                        <div class="button"></div>
                        <ul>
                            <li><a href='/' class="pulse">HOME</a></li>
                            <li><a href='#' class="pulse">ABOUT</a></li>
                            <li><a href='#' class="pulse">PRODUCTS</a>
                                <ul>
                                    <li><a href='#'>Product 1</a>
                                        <ul>
                                            <li><a href='#'>Sub Product</a></li>
                                            <li><a href='#'>Sub Product</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='#'>Product 2</a>
                                        <ul>
                                            <li><a href='#'>Sub Product</a></li>
                                            <li><a href='#'>Sub Product</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='#' class="pulse">BIO</a></li>
                            <li><a href='#' class="pulse">GALLERY</a></li>
                            <li><a href='#' class="pulse">CONTACT</a></li>
                        </ul>
                    </nav>
                    <!-- Конец Верхнее меню -->
                    <div class="cont-block" style="margin-left: 60px">
                        <ul>
                            <li>
                                <svg style="float: left;margin-left: -26px;margin-top: 6px"
                                     xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 14 14">
                                    <defs>
                                        <style>
                                            .pcls-1 {
                                                fill: #ffad00;
                                                fill-rule: evenodd;
                                            }
                                        </style>
                                    </defs>
                                    <path class="pcls-1"
                                          d="M14,11.052a0.5,0.5,0,0,0-.03-0.209,1.758,1.758,0,0,0-.756-0.527C12.65,10,12.073,9.69,11.515,9.363a2.047,2.047,0,0,0-.886-0.457c-0.607,0-1.493,1.8-2.031,1.8a2.138,2.138,0,0,1-.856-0.388A9.894,9.894,0,0,1,3.672,6.253,2.134,2.134,0,0,1,3.283,5.4c0-.536,1.8-1.421,1.8-2.027a2.045,2.045,0,0,0-.458-0.885C4.3,1.932,3.99,1.355,3.672.789A1.755,1.755,0,0,0,3.144.034,0.5,0.5,0,0,0,2.935,0,4.427,4.427,0,0,0,1.551.312,2.62,2.62,0,0,0,.5,1.524,3.789,3.789,0,0,0-.011,3.372a7.644,7.644,0,0,0,.687,2.6A9.291,9.291,0,0,0,1.5,7.714a16.783,16.783,0,0,0,4.778,4.769,9.283,9.283,0,0,0,1.742.825,7.673,7.673,0,0,0,2.608.686,3.805,3.805,0,0,0,1.851-.507,2.62,2.62,0,0,0,1.214-1.052A4.418,4.418,0,0,0,14,11.052Z"></path>
                                </svg>
                                <div>
                                    <a href="tel:<?= Yii::$app->params['tel1_min'] ?>"
                                       class="tel-number"><b><?= Yii::$app->params['tel1'] ?></b></a>
                                    <br>
                                    <a href="tel:<?= Yii::$app->params['tel2_min'] ?>"
                                       class="tel-number"><b><?= Yii::$app->params['tel2'] ?></b></a>
                                </div>
                            </li>
                            <li class="opening">
                                <svg style="float: left;margin-left: -26px;margin-top: -2px"
                                     xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 13 16">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill-rule: evenodd;
                                                fill: #ffad00;
                                            }
                                        </style>
                                    </defs>
                                    <path data-name="Ellipse 74 copy" class="cls-1"
                                          d="M763.9,42.916h0.03L759,49h-1l-4.933-6.084h0.03a6.262,6.262,0,0,1-1.1-3.541,6.5,6.5,0,0,1,13,0A6.262,6.262,0,0,1,763.9,42.916ZM758.5,35a4.5,4.5,0,0,0-3.741,7h-0.012l3.542,4.447h0.422L762.289,42H762.24A4.5,4.5,0,0,0,758.5,35Zm0,6a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,758.5,41Z"
                                          transform="translate(-752 -33)"></path>
                                </svg>
                                Ул.Калинина 105а 4 этаж
                            </li>
                            <li class="opening">10<sup>00</sup>-20<sup>00</sup> без выходных</li>
                        </ul>

                    </div>
                    <?php Pjax::begin([
                        'clientOptions' => [
//                            'method' => 'POST',
                            'url' => '/call',
                            'container' => '#my-modal',
                            'link-selector' => '.call-btn'
                        ],
                        'enablePushState' => false, // не обновлять url
                        'timeout' => '20000',

                    ]);
                    ?>
                    <a rel="nofollow" href="/call" class="call-btn">заказатьзвонок</a>
                    <?php
                    Pjax::end();
                    ?>
                </div>
                <main class="content">
                    <h1>Content</h1>
                    <?= $content ?>
                </main>

                <footer>
                    <br>
                    <br>
                    <br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                    bla-bla bla-blabla-blabla-bla<br>
                </footer>
            </div>
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

