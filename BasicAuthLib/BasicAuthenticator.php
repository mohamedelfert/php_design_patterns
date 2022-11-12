<?php

namespace BasicAuthLib;

class BasicAuthenticator
{
    public function basicLogin(string $username, string $password)
    {
        return $username . '-' . $password;
    }
}