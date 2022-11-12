<?php

namespace Structural\AdapterThirdPartExample;

use TokenAuthLib\TokenAuthenticator;

class TokenAuthAdapter implements AuthenticatorInterface
{
    public function __construct(TokenAuthenticator $authenticator)
    {
        $this->authenticator = $authenticator;
    }

    public function login(array $params)
    {
        return $this->authenticator->tokenLogin($params['key'], $params['token']);
    }
}