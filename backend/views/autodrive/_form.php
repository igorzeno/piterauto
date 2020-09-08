<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AutoDrive */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-drive-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'auto_id')->textInput() ?>

    <?= $form->field($model, 'drive_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
