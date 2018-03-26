<?php
namespace humhub\modules\weather;

use Yii;
use humhub\modules\weather\widgets\Weather;

/**
 * Events for Weather Module
 *
 * @author Simon Franzen <simon@zauberware.com>
 */
class Events extends \yii\base\Object
{

    public static function onDashboardSidebarInit($event) {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->addWidget(Weather::className(), array(), array('sortOrder' => 101));
    }

}
