<?php

namespace Rabsana\Core\Contracts\Interfaces;

interface Date
{
    public function jtog($date, string $format = 'Y-m-d H:i:s'): string;

    public function gtoj($date, string $format = 'Y-m-d H:i:s'): string;
}
