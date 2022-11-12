<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Structural\AdapterThirdPartExample\BasicAuthAdapter;
use Structural\AdapterThirdPartExample\TokenAuthAdapter;
use Structural\AdapterThirdPartExample\UserLogin;

class AdapterThirdPartExampleTest extends TestCase
{
    public function testCanAuthorizeWithBasicAuthLib()
    {
        $basicAuthAdapter = $this->createMock(BasicAuthAdapter::class);
        $basicAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test-test');
        $userLogin = new UserLogin($basicAuthAdapter);
        $userLogin->login(['username' => 'test', 'password' => 'test']);
    }

    public function testCanAuthorizeWithTokenAuthLib()
    {
        $tokenAuthAdapter = $this->createMock(TokenAuthAdapter::class);
        $tokenAuthAdapter->expects($this->once())
            ->method('login')
            ->willReturn('test-test');
        $userLogin = new UserLogin($tokenAuthAdapter);
        $userLogin->login(['key' => 'test', 'token' => 'test']);
    }
}