<?php
namespace humhub\modules\weather;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Assets for Weather Module
 *
 * @author Simon Franzen <simon@zauberware.com>
 */
class Assets extends AssetBundle
{

    public $publishOptions = [
        'forceCopy' => true
    ];

    public $css = [
        'css/weather.module.css'
    ];

    public $jsOptions = [
        'position' => View::POS_END
    ];

    public $js = [
        'js/open-weather.min.js',
        'js/weather.module.js'
    ];

    public $sourcePath = '@weather/assets';

}
