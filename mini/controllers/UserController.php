<?php

namespace mini\controllers;

use common\tools\Curl;
use common\tools\HumpController;
use common\tools\Jsons;
use mini\models\Users;


class UserController extends HumpController
{

    /**
     * @return string
     * 注册小程序账户
     */
    public function actionreMini()
    {
        $request = \Yii::$app->request;
        if ($request->isPost) {
            $data = $request->post();
            $userModel = new Users();
            $result = $userModel->reMini($data);

            if(isset($result))
            {
                return Jsons::trueDate(4001,'添加成功',$result);
            }else{
                return Jsons::falseDate(4002,'添加失败','');
            }

        }else{
            return Jsons::falseDate(4000,'请求方式不对，数据错误','');
        }

    }

    /**
     * @return string
     * 查询出所有小程序
     */
    public function actionseMini()
    {
        $request = \Yii::$app->request;
        if($request->isGet){
            $userModel = new Users();
            $result = $userModel->select();
            if(isset($result))
            {
                return Jsons::trueDate(4001,'查询成功',$result);
            }else{
                return Jsons::falseDate(4002,'查询失败','');
            }
        }else{
            return Jsons::falseDate(4000,'请求方式不对，数据错误','');
        }
    }

    /**
     * @return string
     * 删除指定ID的小程序
     */
    public function actiondeMini()
    {
        $request = \Yii::$app->request;
        if($request->isPost){
            $ids = $request->post('id');
            $userModel = new Users();
            $result = $userModel->deletes($ids);
            if(isset($result))
            {
                return Jsons::trueDate(4001,'删除成功',$result);
            }else{
                return Jsons::falseDate(4002,'删除失败','');
            }
        }else{
            return Jsons::falseDate(4000,'请求方式不对，数据错误','');
        }

    }

    /**
     * 获取小程序的access_token
     * @return string
     */
    public function actionIndex()
    {
//        $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET';
//        Curl::httpsGet($url);
        $wei = \Yii::$app->params['weixin']['app_id'];
//        $wei = json_encode($wei);

        return $wei;
    }

}
