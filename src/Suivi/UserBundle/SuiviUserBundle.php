<?php

namespace Suivi\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Represent the user bundle.
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class SuiviUserBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
