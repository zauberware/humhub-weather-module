<?php
namespace humhub\modules\weather\widgets;

use Yii;
use yii\web\HttpException;

/**
 * Weahter is the widget which shows the weather from given settings.
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
