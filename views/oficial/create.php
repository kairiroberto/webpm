<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Oficial */

$this->title = Yii::t('app', 'Create Oficial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Oficials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oficial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $criar = true; ?>
    
    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listPosto' => $listPosto,
        'criar' => $criar,
    ]) ?>

</div>
