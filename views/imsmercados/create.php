<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImsMercados $model */

$this->title = Yii::t('app', 'Create Ims Mercados');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ims Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-mercados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
