<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\weather\models;

use Yii;

/**
 * ConfigureForm defines the configurable fields.
 *
 * @author Simon Franzen
 */
class ConfigureForm extends \yii\base\Model
{

    public $city;
    public $apiKey;

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
            'apiKey' => Yii::t('WeatherModule.base', 'OpenWeatherMap API Key')
        );
    }
}
