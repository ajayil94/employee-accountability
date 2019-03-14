<?php

namespace app\modules\timesheet\controllers;

use yii\web\Controller;

/**
 * Default controller for the `timesheet` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
