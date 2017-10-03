<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-pessoa-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($bo, 'idbo')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($pessoa, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'nascimento')->textInput() ?>

    <?= $form->field($pessoa, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'endereco')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Pessoa'),  ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
