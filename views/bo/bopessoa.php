<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-pessoa-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($bo, 'idbo')->textInput(['maxlength' => true, 'disabled' => 'disabled']) ?>
    
    <?= $form->field($pessoa, 'nome')->textInput(['maxlength' => true]) ?>

    <?php
    echo '<b>Data de Nascimento</b><br>' .
    DatePicker::widget([
        'model' => $pessoa,
        'attribute' => 'nascimento',
        'options' => ['placeholder' => 'Início'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ]);
    echo '<br>';
    ?>

    <?= $form->field($pessoa, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'cpf')->widget('yii\widgets\MaskedInput', [
        'mask' => '99999999999']) ?>

    <?= $form->field($pessoa, 'telefone')->widget('yii\widgets\MaskedInput', [
        'mask' => '(999) 9999 - 9999']) ?>

    <?= $form->field($pessoa, 'endereco')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($pessoa, 'pai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($pessoa, 'mae')->textInput(['maxlength' => true]) ?>
    
    <?=
    $form->field($pessoa, 'idade')->widget(\kartik\touchspin\TouchSpin::classname(), [
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

    <?= $form->field($pessoa, 'estado_civil')->dropDownList(['c' => 'casado', 's' => 'solteiro', 'o' => 'outro']) ?>
    
    <?php 
            echo 
            $form->field($bo_pessoa, 'idpessoa_tipo')->widget(Select2::classname(), [
                'data' => $listPessoaTipo,
                'language' => 'pt-BR',
                'options' => ['placeholder' => 'Selecione um tipo de parte ...'],
                'pluginOptions' => [
                    'allowClear' => false
                ],
            ]); 
        ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Adicionar'),  ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
