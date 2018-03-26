humhub.module('weather', function(module, require, $) {

	var weatherWidget = $('.weather-temperature');

    var assetsUrl = function() {
		return module.config['assetsUrl'];
    };

    var apiKey = function(){
    	return module.config['apiKey'];
    };

    var city = function(){
    	return module.config['city'];
    };

    var color = function(){
    	return module.config['color'];
    };

    var temperatureType = function(){
    	return module.config['temperature'];
    };

    var lang = function(){
    	return module.config['lang'];
    };

    var windSpeedUnit = function(){
    	return module.config['windSpeedUnit'];
    };

    var init = function(){

    	// color from less var
		$('.weather-temprature-wrapper').css({'color' : module.color()});
		weatherWidget.openWeather({
            wrapperTarget: '.weather-wrapper',
			descriptionTarget: '.weather-description',
			maxTemperatureTarget: '.weather-max-temperature',
			minTemperatureTarget: '.weather-min-temperature',
			windSpeedTarget: '.weather-wind-speed',
			humidityTarget: '.weather-humidity',
			// sunriseTarget: '.missing', // currently we show nothing
			// sunsetTarget: '.missing', // currently we show nothing
			placeTarget: '.weather-place',
			iconTarget: '.weather-icon',
			customIcons: module.assetsUrl() + '/img/backgrounds/',
			units: module.temperatureType(),
			city: module.city(),
			key: module.apiKey(),
			lang: module.lang(),
			windSpeedUnit: module.windSpeedUnit(),
			success: function() {
				weatherWidget.show();
			},
			error: function(message) {
				console.log(message);
			}
		});
    }

    module.export({
    	initOnPjaxLoad: true,
        assetsUrl: assetsUrl,
        apiKey: apiKey,
        lang: lang,
        windSpeedUnit: windSpeedUnit,
        city: city,
        temperatureType: temperatureType,
        color: color,
        init: init
    });
});