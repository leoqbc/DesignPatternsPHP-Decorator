<?php

namespace DifferDev\Web;

use DifferDev\Web\Interfaces\IOText;

class Output implements IOText
{
    protected string $outputString;

    public function setText(string $outputString): void
    {
        $this->outputString = $outputString;
    }

    // Método a ser decorado
    public function getText(): string
    {
        return $this->outputString;
    }
}
