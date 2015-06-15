<?php
/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2015/6/15
 * Time: 10:30
 */

class UserLoginLogoutTest extends TestCase{

    public function testUserLoginLogout()
    {
        $this->visit('/')
            ->type('secret', 'username')
            ->type('secret', 'password')
            ->press('Login')
            ->see('You can manage the list here!')
            ->onPage('/listmanager')
            ->click('logout')
            ->see('Hi, this is homepage!')
            ->onPage('/');

    }
}