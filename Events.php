<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\weather;

use Yii;

/**
 * Events for Weather Widget Module
 *
 * @author Simon Franzen
 */
class Events extends \yii\base\Object
{

    public static function onDashboardSidebarInit($event) {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->addWidget(\humhub\modules\weather\widgets\Weather::className(), array(), array('sortOrder' => 101));
    }

}
