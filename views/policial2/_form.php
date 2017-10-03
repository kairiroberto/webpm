<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Policial2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admissao')->textInput() ?>

    <?= $form->field($model, 'nascimento')->textInput() ?>

    <?= $form->field($model, 'pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mae')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_civil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'altura')->textInput() ?>

    <?= $form->field($model, 'cor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'olhos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'boca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nariz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rosto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instrucao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profissao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exclusao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
