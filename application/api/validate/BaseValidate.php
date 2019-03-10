<?php
/**
 * Created by PhpStorm.
 * User: Ginger
 * Date: 2019/3/10
 * Time: 11:44
 */

namespace app\api\validate;


use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        //获取http传入的参数(获取所有的参数)
        //对这些参数进行校验

        //获取http的所有参数
        $request = Request::instance();
        $params = $request->param();

        //由于继承validate里面所以我们不需要new validata 所以直接this
        $result = $this->check($params);
        if(!$result){
            $error = $this->error;
            throw new Exception($error);
        }else{
            return true;
        }
    }
}