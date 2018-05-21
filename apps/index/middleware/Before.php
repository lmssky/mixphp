<?php

namespace apps\index\middleware;

/**
 * 前置中间件
 * @author 刘健 <coder.liu@qq.com>
 */
class Before
{

    public function handle($callable, \Closure $next)
    {
        // 添加中间件执行代码
        list($controller, $action) = $callable;
        // ...
        // 执行下一个中间件
        return $next();
    }

}
