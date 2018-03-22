humhub.module('weather', function(module, require, $) {

    var assetsUrl = function() {
		return module.config['assetsUrl'];
    };

    var apiKey = function(){
    	return module.config['apiKey'];
    };

    var city = function(){
    	return module.config['city'];
    };

    module.export({
        assetsUrl: assetsUrl,
        apiKey: apiKey,
        city: city
    });
});

$(function() {

	// alert('basicmodule mycity js initialized with variable: ' + mycityJsVar);
	$('.weather-temperature').openWeather({
		descriptionTarget: '.weather-description',
		maxTemperatureTarget: '.weather-max-temperature',
		minTemperatureTarget: '.weather-min-temperature',
		windSpeedTarget: '.weather-wind-speed',
		humidityTarget: '.weather-humidity',
		// sunriseTarget: '.missing',
		// sunsetTarget: '.missing',
		placeTarget: '.weather-place',
		iconTarget: '.weather-icon',
		customIcons: humhub.modules.weather.assetsUrl() + '/img/backgrounds/',
		units: 'c',
		city: humhub.modules.weather.city(),

		key: humhub.modules.weather.apiKey(),
		lang: 'de',
		success: function() {
			$('.weather-temperature').show();
		},
		error: function(message) {
			console.log(message);
		}
	});
});