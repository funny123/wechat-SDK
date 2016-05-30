<?php

namespace tools\Wechat;

use tools\Wechat;

/**
 * 语义理解
 */
class Semantic extends Wechat
{
    /**
     * 接口名称与URL映射
     * @var array
     */
    protected static $url = [
        'semproxy' => 'https://api.weixin.qq.com/semantic/semproxy/search',
    ];

    public static function search()
    {
        #Todo..
    }
}
