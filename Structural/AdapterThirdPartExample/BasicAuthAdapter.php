<?php

namespace Structural\AdapterThirdPartExample;

use BasicAuthLib\BasicAuthenticator;

class BasicAuthAdapter implements AuthenticatorInterface
{
    public function __construct(BasicAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->basicLogin($params['username'], $params['password']);
    }
}