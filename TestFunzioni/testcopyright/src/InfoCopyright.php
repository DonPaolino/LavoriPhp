<?php declare(strict_types=1);

namespace Paolo\testcopyright;

class InfoCopyright
{
    public function generaCopyright($anno, $nomeCompagnia)
    {
        return "Copyright $anno © $nomeCompagnia.";
    }
}
