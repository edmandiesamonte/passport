<?php

use Laravel\Passport\Passport;

class PassportTest extends PHPUnit_Framework_TestCase
{
    public function test_scopes_can_be_managed()
    {
        Passport::tokensCan([
            'user' => 'get user information',
        ]);

        $this->assertTrue(Passport::hasScope('user'));
        $this->assertEquals(['user'], Passport::scopeIds());
        $this->assertEquals('user', Passport::scopes()[0]->id);
    }

    public function test_client_id_generator(){
        Passport::setClientIdGenerator(function ($clientName){
            return str_slug($clientName);
        });

        $this->assertEquals('mobile-app-client', Passport::generateClientId('Mobile App Client'));
    }
}
