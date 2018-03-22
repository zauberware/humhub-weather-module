<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\weather;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Assets for Weather Widget Module
 *
 * @author Simon Franzen
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
