<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialUnidade */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Policial Unidade',
]) . $model->idpolicial_unidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Unidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpolicial_unidade, 'url' => ['view', 'id' => $model->idpolicial_unidade]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="policial-unidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = false; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listUnidade' => $listUnidade,
        'criar' => $criar,
    ]) ?>

</div>
