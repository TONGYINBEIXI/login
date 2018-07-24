<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/24 0024
 * Time: 17:00
 */

namespace app\admins\controller;
use think\Controller;

class Account  extends Controller
{
    public function login()
    {
        return $this->fetch();
    }
}