<?php
/**
 * Created by PhpStorm.
 * User: Ginger
 * Date: 2019/3/10
 * Time: 9:48
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePostiveInt;

class Banner
{
    /**
     * 获取指定的id的banner信息
     * @param $id是指banner的id值
     * http: get
     * url /abnner/:id
     * 访问的http地址:http://z.cn/banner/1    前提是虚拟域名搭建完成

     */
    public function getBanner($id){

//        (new IDMustBePostiveInt())->goCheck();//等同于下面两行
            $checkid = new IDMustBePostiveInt();
            $checkid->goCheck();




        //        $data = [
//            'id' => $id
//        ];
//
//        $validate = new IDMustBePostiveInt();
//
//        $result = $validate->batch()->check($data);
//        if($result){
//            return "成功";
//        }else{
//            return "传入参数必须整数";
//        }

    }
}