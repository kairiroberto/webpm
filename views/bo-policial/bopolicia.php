<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\BoPolicial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-policial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idbo')->textInput(['maxlength' => true, 'readonly' => true]) ?>
    
    <?php 
            echo 
            $form->field($model, 'idpolicial')->widget(Select2::classname(), [
                'data' => $listPolicia,
                'language' => 'pt-BR',
                'options' => ['placeholder' => 'Selecione um policial ...'],
                'pluginOptions' => [
                    'allowClear' => false
                ],
            ]); 
        ?>

    <?= $form->field($model, 'cmt')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Adicionar'),  ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
