<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Policial */

$this->title = Yii::t('app', 'Create Policial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'alterar' => false,
    ]) ?>

</div>
