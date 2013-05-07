<?php

namespace damainpotepuh\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class damainpotepuhUserBundle extends Bundle
{
    public function getParent()
    {
            return 'FOSUserBundle';
    }
}
