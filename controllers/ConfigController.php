<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2016 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */
namespace humhub\modules\weather\controllers;

use Yii;
use humhub\modules\weather\models\ConfigureForm;
use \humhub\modules\admin\permissions\ManageSettings;

/**
 * ConfigController handles the configuration requests.
 *
 * @author Simon Franzen
 */
class ConfigController extends \humhub\modules\admin\components\Controller
{

    /**
     * @inheritdoc
     */
    public function getAccessRules()
    {
        return [
            ['permissions' => ManageSettings::className()]
        ];
    }

    /**
     * Configuration action.
     */
    public function actionIndex()
    {
        $form = new ConfigureForm();
        $manager = Yii::$app->getModule('weather')->settings;
        $form->apiKey = $manager->get('apiKey');
        $form->city = $manager->get('city');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $manager->set('apiKey', $form->apiKey);
            $manager->set('city', $form->city);
        }

        return $this->render('index', array(
            'model' => $form
        ));
    }

}

?>
