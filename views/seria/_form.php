<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Seria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seria-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    
    <?= $form->field($model, 'name')->fileInput() ?>

    <?= $form->field($model, 'season')->textInput() ?>

    <?= $form->field($model, 'number_seria')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Загрузить', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
