<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->beginContent('@app/views/layouts/base.php');
?>
<main class="d-flex flex-grow-1">
    <?php 
    
    if (!Yii::$app->user->isGuest): 
    ?>
        <?= $this->render('_sidebar') ?>

        <div class="content-wrapper p-3">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
            <?php endif ?>

            <?= $content ?>
        </div>
    <?php 
    endif; 
    ?>
</main>
<?php 
$this->endContent();


