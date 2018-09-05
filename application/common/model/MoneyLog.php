<?php

namespace app\common\model;

use think\Model;

class MoneyLog extends Model
{
    // 表名
    protected $name = 'user_money_log';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = false;
    
    // 追加属性
    protected $append = [
        'flow_text'
    ];
    

    
    public function getFlowList()
    {
        return ['add' => __('Add'),'dec' => __('Dec')];
    }     


    public function getFlowTextAttr($value, $data)
    {        
        $value = $value ? $value : (isset($data['flow']) ? $data['flow'] : '');
        $list = $this->getFlowList();
        return isset($list[$value]) ? $list[$value] : '';
    }




    public function user()
    {
        return $this->belongsTo('User', 'user_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
