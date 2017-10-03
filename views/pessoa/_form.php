<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?php
    echo '<b>Data de Nascimento</b><br>' .
    kartik\date\DatePicker::widget([
        'model' => $model,
        'attribute' => 'nascimento',
        'options' => ['placeholder' => 'Início'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cpf')->widget('yii\widgets\MaskedInput', [
        'mask' => '99999999999']) ?>

    <?= $form->field($model, 'telefone')->widget('yii\widgets\MaskedInput', [
        'mask' => '(999) 9999 - 9999']) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mae')->textInput(['maxlength' => true]) ?>
    
    <?=
    $form->field($model, 'idade')->widget(\kartik\touchspin\TouchSpin::classname(), [
        'options' => ['placeholder' => 'Quantidade de policiais...'],
        //'name' => 't4',
        'pluginOptions' => [
            'buttonup_class' => 'btn btn-primary',
            'buttondown_class' => 'btn btn-info',
            'buttonup_txt' => '<i class="glyphicon glyphicon-plus-sign"></i>',
            'buttondown_txt' => '<i class="glyphicon glyphicon-minus-sign"></i>'
        ]
    ]);
    ?>

    <?= $form->field($model, 'estado_civil')->dropDownList(['c' => 'casado', 's' => 'solteiro', 'o' => 'outro']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
