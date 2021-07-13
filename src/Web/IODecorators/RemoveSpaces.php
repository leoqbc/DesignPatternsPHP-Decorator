<?php

namespace DifferDev\Web\IODecorators;

use DifferDev\Web\Interfaces\IOText;

class RemoveSpaces implements IOText
{
    public function __construct(
        protected IOText $ioComponent
    ) {
        # code...
    }

    public function setText(string $text): void
    {
        $this->ioComponent->setText($text);
    }

    public function getText(): string
    {
        $text = $this->ioComponent->getText();
        return trim($text);
    }
}
