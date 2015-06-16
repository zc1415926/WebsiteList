<?php
use App\User;


/**
 * Created by PhpStorm.
 * User: ZC
 * Date: 2015/6/16
 * Time: 9:18
 */

class CatagoriesCRUDTest extends TestCase
{
    public function testCatagoriesCRUD()
    {

        $this->visit('/')
            ->type('secret', 'username')
            ->type('secret', 'password')
            ->press('Login')
            ->see('You can manage the list here!')
            ->see('3D');


    }
}