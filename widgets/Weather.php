<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\weather\widgets;

use Yii;
use yii\web\HttpException;

/**
 * WeatherWidget shows the weather for current location of user.
 *
 * @author Simon Franzen <simon@zauberware.com>
 */
class Weather extends \humhub\components\Widget
{

    /**
     * Runs the activity widget
     */
    public function run()
    {
        $module = Yii::$app->getModule('weather');

        return $this->render('weatherWidget', [
            'assetsUrl' => $module->getAssetsUrl(),
            'apiKey'    => $module->settings->get('apiKey'),
            'city'      => $module->settings->get('city')
        ]);
    }

}
