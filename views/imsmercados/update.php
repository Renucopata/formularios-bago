<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImsMercados $model */

$this->title = Yii::t('app', 'Update Ims Mercados: {name}', [
    'name' => $model->CODIGOIMS,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ims Mercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGOIMS, 'url' => ['view', 'CODIGOIMS' => $model->CODIGOIMS]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ims-mercados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
