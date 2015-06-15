<?php
/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2015/6/15
 * Time: 12:59
 */

class AuthMiddlewareTest extends TestCase
{
    public function testAuthMiddleware()
    {
        $this->visit('/listmanager')
            ->see('Hi, this is homepage!')
            ->onPage('/');
    }
}