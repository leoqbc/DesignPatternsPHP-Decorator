<?php

namespace DifferDev\Web;

use DifferDev\Web\Interfaces\IOText;

class Input implements IOText
{
    protected string $inputString;

    public function setText(string $inputString): void
    {
        $this->inputString = $inputString;
    }

    // Método a ser decorado
    public function getText(): string
    {
        return $this->inputString;
    }
}
