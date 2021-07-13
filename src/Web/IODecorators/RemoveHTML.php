<?php

namespace DifferDev\Web\IODecorators;

use DifferDev\Web\Interfaces\IOText;

class RemoveHTML implements IOText
{
    public function __construct(
        protected IOText $ioComponent
    ) {
        # code...
    }

    public function getText(): string
    {
        $text = $this->ioComponent->getText();
        return strip_tags($text);
    }

    public function setText(string $text): void
    {
        $this->ioComponent->setText($text);
    }
}
