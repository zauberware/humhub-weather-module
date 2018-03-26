<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo Yii::t('WeatherModule.base', '<strong>Weather Widget</strong> configuration'); ?>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin([ 'id' => 'configure-form' ]); ?>
            <div class="form-group">
                <?= $form->field($model, 'apiKey')->textInput(); ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'city')->textInput(); ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'temperature')->dropDownList($temperatureTypes)->label($model->getAttributeLabel('temperature')); ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
            </div>
    	<?php ActiveForm::end(); ?>
    </div>
</div>
