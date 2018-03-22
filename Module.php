<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\weather;

use yii\helpers\Url;

/**
 * Weather Widget Module
 *
 * @author Simon Franzen
 */
class Module extends \humhub\components\Module
{

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
}
