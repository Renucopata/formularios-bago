<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ImsMercadosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ims-mercados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CODIGOIMS') ?>

    <?= $form->field($model, 'MERCADO') ?>

    <?= $form->field($model, 'PRESENTACION') ?>

    <?= $form->field($model, 'PRODUCTOS') ?>

    <?= $form->field($model, 'CANTIDAD') ?>

    <?php // echo $form->field($model, 'DESCUENTO') ?>

    <?php // echo $form->field($model, 'LINEA') ?>

    <?php // echo $form->field($model, 'JEFEDEPRODUCTO') ?>

    <?php // echo $form->field($model, 'UNIDADES') ?>

    <?php // echo $form->field($model, 'F10') ?>

    <?php // echo $form->field($model, 'F11') ?>

    <?php // echo $form->field($model, 'F12') ?>

    <?php // echo $form->field($model, 'F13') ?>

    <?php // echo $form->field($model, 'F14') ?>

    <?php // echo $form->field($model, 'F15') ?>

    <?php // echo $form->field($model, 'F16') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
