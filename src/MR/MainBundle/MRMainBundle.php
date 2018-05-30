<?php

namespace MR\MainBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MRMainBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
