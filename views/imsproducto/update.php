<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImsProducto $model */

$this->title = Yii::t('app', 'Update Ims Producto: {name}', [
    'name' => $model->CODIMS,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ims Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIMS, 'url' => ['view', 'CODIMS' => $model->CODIMS]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ims-producto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
