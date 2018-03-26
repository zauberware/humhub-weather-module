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
                <div class="help-block">
                    <?php echo Yii::t('WeatherModule.base', 'Register your application on <a href="http://openweathermap.org/api" target="_blank">openweathermap.org</a> and obtain your API key.'); ?>
                </div>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'city')->textInput(); ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'temperature')->dropDownList($temperatureTypes)->label($model->getAttributeLabel('temperature')); ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'windSpeedUnit')->dropDownList($windSpeedUnits)->label($model->getAttributeLabel('windSpeedUnit')); ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary'])?>
            </div>
    	<?php ActiveForm::end(); ?>
    </div>
</div>
