<?php


use yii\bootstrap5\Nav;
?>

<aside class="shadow">
    <?php echo Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Mis mercados',
            'url' => ['/site/index']
        ],
        [
            'label' => 'opciones',
            'url' => ['/comment/index']
        ]
    ]
]) ?>
</aside>