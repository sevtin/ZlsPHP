<?php
namespace Controller;
use Z;
/**
 * ZlsApi 接口示例
 * @desc          示例用的
 * @key           zls
 * @author        影浅
 * @email         seekwe@gmail.com
 * @copyright     Copyright (c) 2015 - 2017, 影浅, Inc.
 */
class ZlsApi extends Index
{
    /**
     * 入口
     * @time   2017-05-30 21:32
     * @param  string say 示例字段 G 运行成功Api
     * @return int code 状态码
     * @return string data.clientIp 客户端IP
     * @return object {"code":200,"msg":"ok","data":{"0":"运行成功Api","clientIp":"127.0.0.1","1":"http://127.0.0.1:1221/ZlsApi/index.aspx","2":"index[runtime:0s,memory:2kb]","3":{"runtime":"0.001s","memory":"0.016929626464844kb"}}}
     */
    public function zIndex()
    {
        z::debug('index');
        return z::json(200, 'ok', [
            z::getPost('say', '运行成功Api'),
            'clientIp' => z::clientIp(),
            z::host(true, true, true),
            z::debug('index', true, true),
            z::debug(),
        ]);
    }
    /**
     * POST请求入口
     * @time 2019-1-7 13:04:28
     */
    public function POSTzIndex()
    {
        return z::json(200, 'IS_POST');
    }
}
