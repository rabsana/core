<?php

namespace Rabsana\Core\Contracts\Abstracts;

use Rabsana\Core\Contracts\Interfaces\Math as InterfacesMath;

abstract class Math implements InterfacesMath
{
    // remove these
    public function setPrecision(int $precision): Math
    {
        $className = "Rabsana\\Core\\Support\\Math\\Math";
        $class = new $className();
        $class->precision = $precision;
        return $class;
    }

    public function setTrimTrailingZeroes(bool $trimTrailingZeroes): Math
    {
        $className = "Rabsana\\Core\\Support\\Math\\Math";
        $class = new $className();
        $class->trimTrailingZeroes = $trimTrailingZeroes;
        return $class;
    }

    public function setParams(array $params): Math
    {
        $className = "Rabsana\\Core\\Support\\Math\\Math";
        $class = new $className();

        if (isset($params['precision'])) {
            $class->precision = (int) $params['precision'];
        }
        if (isset($params['trimTrailingZeroes'])) {
            $class->trimTrailingZeroes = (bool) $params['trimTrailingZeroes'];
        }

        return $class;
    }
}
