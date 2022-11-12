<?php

namespace Structural\AdapterThirdPartExample;

interface AuthenticatorInterface
{
    public function login(array $params);
}