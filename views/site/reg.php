<h1>Регистрация</h1>
<?php
use \yii\widgets\ActiveForm;
?>
<?php
$form = ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?= $form->field($model,'username')->textInput(['autofocus' => true])->label('Логин') ?>
<?= $form->field($model,'password')->passwordInput()->label('Пароль') ?>
<?= $form->field($model,'passwordConf')->passwordInput()->label('Подтвердите пароль') ?>
<div>
<button type="submit" class="btn btn-primary">Регистрация</button>
</div>
<?php
ActiveForm::end();
?>

        
        