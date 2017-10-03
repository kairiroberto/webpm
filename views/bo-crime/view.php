<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */

$this->title = $model->idbo_crime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-crime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idbo_crime], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idbo_crime], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbo_crime',
            'idbo',
            'idbo0.data',
            'idcrime',
            'idcrime0.artigo',

        ],
    ]) ?>

</div>
