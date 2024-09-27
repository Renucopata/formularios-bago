<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ImsProducto $model */

$this->title = Yii::t('app', 'Create Ims Producto');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ims Productos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-producto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
