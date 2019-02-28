<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/27
 * Time: 17:18
 */

namespace app\sample\controller;


//use think\Request;

class Test
{
    public function hello(){
//        return '你好,quye';

//        需要引用：use think\Request;
//        $all = Request::instance()->param();//param获取地址栏的全部参数,或者再里面定义(?后面的参数)
//        $all2 = Request::instance()->get();//同上的param方法
//        $all3 = Request::instance()->route();//获取路径里面的参数


//        var_dump($all);
//        var_dump($all2);
//        var_dump($all3);

        //获取参数可以使用助手函数
        $input = input('param.');//代表获取全部，获取一个也可以后面点加参数
        var_dump($input);



    }
}