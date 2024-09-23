<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ImsMercados $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ims-mercados-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CODIGOIMS')->textInput() ?>

    <?= $form->field($model, 'MERCADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRESENTACION')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRODUCTOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CANTIDAD')->textInput() ?>

    <?= $form->field($model, 'DESCUENTO')->textInput() ?>

    <?= $form->field($model, 'LINEA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JEFEDEPRODUCTO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UNIDADES')->textInput() ?>

    <?= $form->field($model, 'F10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F14')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F15')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'F16')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
