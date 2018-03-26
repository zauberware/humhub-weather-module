<?php
namespace humhub\modules\weather\controllers;

use Yii;
use humhub\modules\weather\Module;
use humhub\modules\weather\models\ConfigureForm;
use \humhub\modules\admin\permissions\ManageSettings;

/**
 * ConfigController handles the configuration requests.
 *
 * @author Simon Franzen <simon@zauberware.com>
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
        $temperatureTypes = Module::temperatureDisplayTypes();
        $windSpeedUnits = Module::windSpeedUnits();

        $form = new ConfigureForm();
        $manager = Yii::$app->getModule('weather')->settings;
        $form->apiKey = $manager->get('apiKey');
        $form->city = $manager->get('city');
        $form->temperature = $manager->get('temperature');
        $form->windSpeedUnit = $manager->get('windSpeedUnit');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $manager->set('apiKey', $form->apiKey);
            $manager->set('city', $form->city);
            $manager->set('temperature', $form->temperature);
            $manager->set('windSpeedUnit', $form->windSpeedUnit);
        }

        return $this->render('index', array(
            'model' => $form,
            'temperatureTypes' => $temperatureTypes,
            'windSpeedUnits' => $windSpeedUnits
        ));
    }

}

?>
