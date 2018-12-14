<?php
/**
 * Created by PhpStorm.
 * User: sinker
 * Date: 2018/12/13
 * Time: 16:00
 */

namespace mini\controllers;


use common\tools\HumpController;

class CommonController extends HumpController
{

    public function actionError()
    {
        return '显示错误页面或者服务器设置404页面等其它页面';
    }
}