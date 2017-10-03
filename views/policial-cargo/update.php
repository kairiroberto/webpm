<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCargo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Policial Cargo',
]) . $model->idpolicial_cargo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Cargos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpolicial_cargo, 'url' => ['view', 'id' => $model->idpolicial_cargo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="policial-cargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = false; ?>
    
    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listCargo' => $listCargo,
        'criar' => $criar,
    ]) ?>

</div>
