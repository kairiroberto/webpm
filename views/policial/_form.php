<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use kartik\form\ActiveForm;
use kartik\date\DatePicker;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Policial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="policial-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?php if (!$alterar) { ?>
    
    <?=
    $form->field($model, 'flag')->widget(FileInput::classname(), [
        'options' => [
            'multiple' => false,
        ],
    ])
    ?>
    
    <?php } ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'cpf')->widget('yii\widgets\MaskedInput', [
        'mask' => '99999999999'])
    ?>
    
    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matricula')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'email', [
        'addon' => ['prepend' => ['content' => '@']]])
    ?>
    
    <?php
    echo
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'nascimento',
        'options' => ['placeholder' => 'Data de nascimento'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>
    
    <?= $form->field($model, 'naturalidade')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mae')->textInput(['maxlength' => true]) ?>

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

    <?php
    echo
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'admissao',
        'options' => ['placeholder' => 'Admissão'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>
    
    <?php
    echo
    DatePicker::widget([
        'model' => $model,
        'attribute' => 'exclusao',
        'options' => ['placeholder' => 'Exclusão'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <div class="form-group">
        <?=
        Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' =>
            $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'])
        ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
