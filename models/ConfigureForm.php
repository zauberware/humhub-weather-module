<?php
namespace humhub\modules\weather\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 *
 * @author Simon Franzen <simon@zauberware.com>
 */
class ConfigureForm extends \yii\base\Model
{

    public $city;
    public $apiKey;
    public $temperature;
    public $windSpeedUnit;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            array(
                'city',
                'string'
            ),
            array(
                'apiKey',
                'string'
            ),
            array(
                'temperature',
                'string'
            ),
            array(
                'windSpeedUnit',
                'string'
            )
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'city' => Yii::t('WeatherModule.base', 'Enter city like "Berlin, Germany"'),
            'apiKey' => Yii::t('WeatherModule.base', 'OpenWeatherMap API Key'),
            'temperature' => Yii::t('WeatherModule.base', 'Unit for temperature'),
            'windSpeedUnit' => Yii::t('WeatherModule.base', 'Unit for windspeed')
        );
    }

    
}
