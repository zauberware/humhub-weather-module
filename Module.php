<?php
namespace humhub\modules\weather;

use Yii;
use yii\helpers\Url;

/**
 * Weather Module - A simple widget in the sidebar
 *
 * @author Simon Franzen <simon@zauberware.com>
 */
class Module extends \humhub\components\Module
{

    const TYPE_KELVIN       = 'c';
    const TYPE_FARENHEIT    = 'f';

    const TYPE_MPS          = 'Mps';
    const TYPE_KMH          = 'km/h';

    /**
     * @inheritdoc
     */
    public function disable()
    {
        parent::disable();
    }

    /**
     * @inheritdoc
     */
    public function enable()
    {
        return parent::enable();
    }

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
            '/weather/config'
        ]);
    }

    /**
     * Return string for temperature types with js param as key.
     * @return string[]
     */
    public static function temperatureDisplayTypes()
    {
        return [
            Module::TYPE_KELVIN => Yii::t('WeatherModule.base', 'Kelvin'),
            Module::TYPE_FARENHEIT => Yii::t('WeatherModule.base', 'Fahrenheit'),
        ];
    }

    /**
     * Return string for wind speed units with js param as key.
     * @return string[]
     */
    public static function windSpeedUnits()
    {
        return [
            Module::TYPE_MPS => 'Mps',
            Module::TYPE_KMH => 'km/h'
        ];
    }


}
