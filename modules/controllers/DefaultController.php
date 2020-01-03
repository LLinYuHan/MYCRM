<?php

namespace app\modules\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'layout1';
        return $this->render('index');
    }

    public function actionCalendar()
    {
    	$this->layout = 'layout1';
    	return $this->render('calendar');
    }

    public function actionMap()
    {
    	$this->layout = 'layout1';
    	return $this->render('map');
    }
}
