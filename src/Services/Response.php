<?php

namespace App\Services;

class Response
{
    public function __construct(
        private readonly string $html
    )
    {
    }

    public function echo(): void
    {
        echo  $this->html;
    }
}