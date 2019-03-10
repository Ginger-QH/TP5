<?php
/**
 * Created by PhpStorm.
 * User: Ginger
 * Date: 2019/3/10
 * Time: 10:17
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    //受保护的protected   关键字是:$rule(必须写)
    protected $rule = [
        'id' => 'require|isPositiveInteger'
    ];

    /**
     * 自定义的验证规则
     * @access protected
     * @param mixed     $value  字段值
     * @param mixed     $rule  验证规则 格式：数据表,字段名,排除ID,主键名
     * @param array     $data  数据
     * @param string    $field  验证字段名
     * @return bool
     */
    protected function isPositiveInteger($value,$rule= '',$data = '', $field = ''){
        if(is_numeric($value) && is_int($value + 0) && ($value + 0) > 0){
                return true;
        }else{
            return $field.'你输入的必须为正整数';
        }
    }


}