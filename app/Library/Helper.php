<?php

namespace App\Library;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Helper
{
    /**
     * 输出 JSON
     */
    public static function response($data = null, $status = 200, $message = 'ok')
    {
        $content = [
            'status'  => $status,
            'message' => $message,
            'data'    => $data,
        ];

        return response($content, $status)->header('Content-Type', 'application/json');
    }

    /**
     * 接口请求出错时输出
     *
     * @param     $msg
     * @param int $status
     *
     * @return mixed
     */
    public static function error(\Exception $e)
    {
        if ($e instanceof ModelNotFoundException) {
            return Helper::response(null, 404, '未知资源');
        }

        if ($e instanceof MethodNotAllowedHttpException) {
            return Helper::response(null, 405, '方法不允许');
        }

        return Helper::response(null, 500, $e->getMessage());
    }
}
