<?php

declare(strict_types=1);

use Marmotte\Brick\Mode;
use Marmotte\Core\Kernel;

require_once __DIR__ . '/../vendor/autoload.php';

(new Kernel())->run(
    __DIR__ . '/..',
    __DIR__ . '/../config',
    __DIR__ . '/../cache',
    Mode::DEV
);
