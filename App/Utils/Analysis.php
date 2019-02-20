<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 2019-02-20
 * Time: 14:59
 */

namespace App\Utils;


class Analysis
{

    /**
     * 同一个时间戳数组合并
     *
     * @param array $pardon_date  原有数组
     * @param array $data 合并数组
     * @param array $subscript 数组新下标
     * @param array $compare if判断比较字段
     * @return boolean
     */
    static function conver($pardon_date = [], $data = [], $subscript = 'date_time', $compare = ''){
        foreach($pardon_date as $key => $val){
            if(!empty($data)){
                foreach($data as $data_key => $data_val){
                    if($val[$subscript] == $data_val[$subscript]){
                        $pardon_date[$key][$compare] = $data_val[$compare];
                    }else{
                        if(!isset($pardon_date[$key][$compare]) || empty($pardon_date[$key][$compare])){
                            $pardon_date[$key][$compare] = 0;
                        }
                    }
                }
            }else{
                $pardon_date[$key][$compare] = 0;
            }
        }
        return $pardon_date;
    }
}