<?php

namespace Structural\Adapter;

class NormalEngine implements EngineInterface
{
    public function startEngine()
    {
        return 'Normal Engine Start';
    }
}