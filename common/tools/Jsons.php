<?php
/**
 * Created by PhpStorm.
 * User: fight
 * Date: 2018/12/2
 * Time: 11:28
 */

namespace common\tools;


class Jsons
{

    public static function trueDate($code,$msg,$data)
    {
        $total  = array('code'=>$code,'msg'=>$msg,'data'=>$data);
        $result = array('success' => $total);
        return json_encode($result);
    }

    public static function falseDate($code,$msg,$data)
    {
        $total  = array('code'=>$code,'msg'=>$msg,'data'=>$data);
        $result = array('false'=>$total);
        return json_encode($result);
    }
}