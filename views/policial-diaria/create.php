<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PolicialDiaria */

$this->title = Yii::t('app', 'Create Policial Diaria');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-diaria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listDiaria' => $listDiaria,
    ]) ?>

</div>
