<?php

namespace Structural\AdapterThirdPartExample;

use BasicAuthLib\BasicAuthenticator;

class UserLogin
{
    public function __construct(AuthenticatorInterface $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->login($params);
    }
}