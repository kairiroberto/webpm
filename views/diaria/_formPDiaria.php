<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiariaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Escalas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diaria-formPolicialDiaria">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        
    <?php
    $form = ActiveForm::begin();
    ?>

    <?php
    echo TabularForm::widget([
        'dataProvider' => $provider,
        'form' => $form,
        'attributes' => [
            'matricula' => [
                'type' => TabularForm::INPUT_STATIC,
            ],
            'nome' => [
                'type' => TabularForm::INPUT_STATIC
            ],
            'executada' => [
                'type' => TabularForm::INPUT_WIDGET,
                'widgetClass' => \kartik\widgets\SwitchInput::classname(),
                'options' => [
                    'pluginOptions' => [
                        'onText' => 'Sim',
                        'offText' => 'Não',
                    ],
                ],
            ],
            'justificada' => [
                'type' => TabularForm::INPUT_WIDGET,
                'widgetClass' => \kartik\widgets\SwitchInput::classname(),
                'options' => [
                    'pluginOptions' => [
                        'onText' => 'Sim',
                        'offText' => 'Não',
                    ],
                ],
            ],
        ],
        'actionColumn'=>false,
        'gridSettings' => [
            'floatHeader' => false,
            'panel' => [
                'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> Policiais</h3>',
                'type' => GridView::TYPE_PRIMARY,
                'after' =>
                Html::a('<i class="glyphicon glyphicon-remove"></i> Delete', '#', ['class' => 'btn btn-danger']) . ' ' .
                Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class' => 'btn btn-primary'])
            ]
        ]
    ]);
    ?>

    <?php
    ActiveForm::end();
    ?>
    
    
</div>
