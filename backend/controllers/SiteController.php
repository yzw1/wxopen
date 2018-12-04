<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public function say()
    {
        return '12';
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'eeeeeeeeeeeeeeeeeeeeeeeeeeeee';
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        return '1233333333333333333333';

    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        return 'ewwwwwwwwwwwwww';
    }
}
