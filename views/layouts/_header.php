<?php

use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\bootstrap5\Html;


 NavBar::begin([
        //'brandLabel' => Yii::$app->name,
        'brandLabel' => 'Formularios',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark fixed-top shadow',
        'style' => 'background-color: #8b008b; border-color: #000000;',]
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => [
            //['label' => 'Home', 'url' => ['/site/index']],
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Opciones','visible'=>!Yii::$app->user->isGuest,
                    'items' => [
                         ['label' => 'Usuarios', 'url' => ['/usuarios/index']],
                    ],
            ],            
            Yii::$app->user->isGuest
                ? ['label' => 'Login', 'url' => ['/site/login']]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->NOMBRES . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    echo '<div class="header" style="height: 55px;"></div>';
    
