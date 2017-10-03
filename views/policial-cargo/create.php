<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PolicialCargo */

$this->title = Yii::t('app', 'Create Policial Cargo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Cargos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-cargo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = true; ?>
    
    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listCargo' => $listCargo,
        'criar' => $criar,
    ]) ?>

</div>
