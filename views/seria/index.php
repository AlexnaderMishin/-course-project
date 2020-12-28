<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SeriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Serias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seria-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Seria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'season',
            'number_seria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
