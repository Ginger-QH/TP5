<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 17:18
 */

namespace app\sample\controller;


use think\Request;

class Test
{
    public function hello(){
//        return '你好,quye';
        $all = Request::instance()->param();//获取地址栏的全部参数(?后面的参数)
        var_dump($all);
        echo "<br>";


    }
}