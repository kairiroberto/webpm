<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PolicialUnidade */

$this->title = Yii::t('app', 'Create Policial Unidade');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Unidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-unidade-create">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php $criar = true; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listUnidade' => $listUnidade,
        'criar' => $criar,
    ]) ?>

</div>
