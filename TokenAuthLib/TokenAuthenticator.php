<?php

namespace TokenAuthLib;

class TokenAuthenticator
{
    public function tokenLogin(string $key, string $token)
    {
        return base64_encode($key . '-' . $token);
    }
}