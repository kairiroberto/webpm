<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialDiaria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-diaria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'iddiaria')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    
    <?php
    echo
    $form->field($model, 'idpolicial')->widget(Select2::classname(), [
        'data' => $listPolicial,
        'language' => 'pt-BR',
        'options' => ['placeholder' => 'Selecione um policial ...'],
        'pluginOptions' => [
            'allowClear' => false
        ],
    ]);
    ?>
    
    <?=
    $form->field($model, 'executada')->widget(SwitchInput::classname(), [
        'pluginOptions' => [
            'onText' => 'Sim',
            'offText' => 'Não',
        ]
    ])
    ?>
    
    <?=
    $form->field($model, 'justificada')->widget(SwitchInput::classname(), [
        'pluginOptions' => [
            'onText' => 'Sim',
            'offText' => 'Não',
        ]
    ])
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
