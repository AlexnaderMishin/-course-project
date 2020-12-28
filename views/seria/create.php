<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Seria */

$this->title = 'Create Seria';
$this->params['breadcrumbs'][] = ['label' => 'Serias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
