<?php

namespace tinywan\captcha\facade;

use think\Facade;

/**
 * Class Captcha
 * @package tinywan\captcha\facade
 * @mixin \tinywan\captcha\Captcha
 */
class Captcha extends Facade
{
    protected static function getFacadeClass()
    {
        return \tinywan\captcha\Captcha::class;
    }
}
