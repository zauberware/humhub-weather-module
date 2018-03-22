<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
 
\humhub\modules\weather\Assets::register($this);

$this->registerJsConfig('weather', [
	'assetsUrl' => $assetsUrl,
	'apiKey' => $apiKey,
	'city' => $city
]);

?>

<div class="panel panel-default panel-activities">   
    <div class='weather-wrapper'>
    	<img src="" class="weather-icon" alt="Weather Icon" />
		
		<div class="weather-place"></div>
		
		<div class='weather-temprature-wrapper'><span class="weather-temperature"></span> (<span class="weather-min-temperature"></span> - <span class="weather-max-temperature"></span>)</div>
		
		<p><span class="weather-description"></span></p> 
		
		<p><strong>Feuchtigkeit: </strong><span class="weather-humidity"></span> |
		
		<strong>Wind: </strong><span class="weather-wind-speed"></span></p>
		
    </div>
</div>