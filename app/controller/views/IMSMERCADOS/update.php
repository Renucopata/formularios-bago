<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\IMSMERCADOS $model */

$this->title = Yii::t('app', 'Update Imsmercados: {name}', [
    'name' => $model->CODIGOIMS,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Imsmercados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CODIGOIMS, 'url' => ['view', 'CODIGOIMS' => $model->CODIGOIMS]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="imsmercados-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
