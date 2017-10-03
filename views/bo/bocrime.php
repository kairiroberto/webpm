<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bo-pessoa-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($bo, 'idbo')->textInput(['maxlength' => true]) ?>
    
    <?php 
            echo 
            $form->field($crime, 'idcrime')->widget(Select2::classname(), [
                'data' => $listCrime,
                'language' => 'pt-BR',
                'options' => ['placeholder' => 'Selecione um crime ...'],
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
