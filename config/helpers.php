<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/9/6
 * Time: 17:43
 */
function route_class()
{

    return str_replace('.', '-', Route::currentRouteName());
}