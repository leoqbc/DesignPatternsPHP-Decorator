<?php

namespace DifferDev\Web\Interfaces;

interface IOText
{
    public function getText(): string;
    public function setText(string $text): void;
}
