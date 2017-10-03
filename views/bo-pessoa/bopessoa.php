<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-crime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idbo')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    
    <?php 
            echo 
            $form->field($model, 'idpessoa')->widget(Select2::classname(), [
                'data' => $listPessoa,
                'language' => 'pt-BR',
                'options' => ['placeholder' => 'Selecione uma pessoa ...'],
                'pluginOptions' => [
                    'allowClear' => false
                ],
            ]); 
        ?>
    
    <?php 
            echo 
            $form->field($model, 'idpessoa_tipo')->widget(Select2::classname(), [
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
