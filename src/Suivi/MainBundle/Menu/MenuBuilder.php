<?php

namespace Suivi\MainBundle\Menu;

use Knp\Menu\FactoryInterface;

/**
 * MenuBuilder for main bundle.s
 *
 * @author Benjamin Lazarecki <benjamin.lazarecki@gmail.com>
 */
class MenuBuilder
{
    protected $factory;

    /**
     * Constructor.
     *
     * @param FactoryInterface $factory The factory.
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * todo add doc
     */
    public function createTopMenu()
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', array('route' => 'main_index'));

        return $menu;
    }
}
