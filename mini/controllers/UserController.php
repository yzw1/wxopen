<?php

namespace mini\controllers;

use common\tools\HumpController;
use common\tools\Jsons;

class UserController extends HumpController
{

    public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }

    public function actionreMini()
    {

        $code = 0;
        $msg = 'ww';
        $num = '1244';
//        $data = array('we'=>array(23=>'wq'));
       return Jsons::trueDate($code,$msg,$num);


//          return Yii::getVersion();
//        $request = Yii::$app->request;
//
//        if ($request->isAjax) { /* 该请求是一个 AJAX 请求 */ }
//        if ($request->isGet)  { /* 请求方法是 GET */ }
//        if ($request->isPost) { /* 请求方法是 POST */ }
//        if ($request->isPut)  { /* 请求方法是 PUT */ }

    }


    /**
     * 获取小程序的access_token
     * @return string
     */
    public function actionIndex()
    {
        return '11111111111111111111111111';
    }

}
