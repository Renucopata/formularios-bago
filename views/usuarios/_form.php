<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuarios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_USUARIO')->textInput() ?>

    <?= $form->field($model, 'NOMBRES')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDOS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USERNAME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SESSION1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_DEPTO')->textInput() ?>

    <?= $form->field($model, 'CODVISIT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_AT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CREATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_AT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPDATE_BY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LAST_LOGIN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_CARGO')->textInput() ?>

    <?= $form->field($model, 'CODALM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AUTHKEY')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PUNTOVENTA')->textInput() ?>

    <?= $form->field($model, 'EMISION')->textInput() ?>

    <?= $form->field($model, 'ACCESS_TOKEN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
