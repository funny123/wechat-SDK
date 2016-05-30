<?php

namespace tools\Wechat;

use tools\Wechat;

/**
 * ACCESS TOKEN获取
 */
class Token extends Wechat
{

    /**
     * 接口名称与URL映射
     * @var array
     */
    protected static $url = [
        'access_token' => 'https://api.weixin.qq.com/cgi-bin/token', // 获取ACCESS_TOKEN
        'jsapi_ticket' => 'https://api.weixin.qq.com/cgi-bin/ticket/getticket', // JSAPI_TICKET获取地址
    ];

    public static function get()
    {
        $params = [
            'appid'      => parent::$config['appid'],
            'secret'     => parent::$config['secret'],
            'grant_type' => 'client_credential',
        ];
        $result = Utils::api(self::$url['access_token'], $params);
        if ($result) {
            return $result['access_token'];
        } else {
            return false;
        }
    }

    public static function ticket()
    {
        #Todo..
    }
}
