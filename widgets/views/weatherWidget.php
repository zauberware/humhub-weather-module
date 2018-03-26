<?php

\humhub\modules\weather\Assets::register($this);

$this->registerJsConfig('weather', [
	'color' => $color,
	'temperature' => $temperature,
	'assetsUrl' => $assetsUrl,
	'apiKey' => $apiKey,
	'lang' => $lang,
	'city' => $city
]);

?>

<div class='panel panel-default panel-activities'>   
    <div class='weather-wrapper'>
    	<img src='' class='weather-icon' alt='Weather Icon' />
		
		<div class='weather-place'></div>
		
		<div class='weather-temprature-wrapper'>
			<span class='weather-temperature'></span> 
			(<span class='weather-min-temperature'></span> - <span class='weather-max-temperature'></span>)
		</div>
		
		<p><span class='weather-description'></span></p> 
		
		<p>
			<strong><?= Yii::t('WeatherModule.base', 'Humidity:') ?> </strong> <span class='weather-humidity'></span> |
		
			<strong><?= Yii::t('WeatherModule.base', 'Wind:') ?> </strong>
			<span class='weather-wind-speed'></span>
		</p>
		
    </div>
</div>