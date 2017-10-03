<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Oficial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oficial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php if ($criar) {  ?>
    
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
    
    <?php } else { ?>
    
        <?= $form->field($model, 'idpolicial')->dropDownList($listPolicial, ['disabled' => 'disabled']) ?>
    
    <?php } ?>

    <?= $form->field($model, 'idposto')->dropDownList($listPosto) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
