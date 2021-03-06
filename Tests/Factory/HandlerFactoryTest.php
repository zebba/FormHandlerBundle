<?php

namespace Zebba\Bundle\FormHandlerBundle\Tests\Factory;

use Zebba\Bundle\FormHandlerBundle\Factory\FormHandlerFactory;
use Zebba\Component\Form\HandlerInterface;

final class HandlerFactoryTest extends \PHPUnit_Framework_testCase
{
	/** @var HandlerFactory */
    private $factory;

    public function setUp()
    {
        $factory = $this->getFactory();

        $this->factory = new FormHandlerFactory($factory);
    }

    public function testGet()
    {
        $type = $this->getType();

        $this->assertTrue($this->factory->get($type) instanceof HandlerInterface);
    }

    private function getFactory()
    {
        return $this->getMock('\Symfony\Component\Form\FormFactoryInterface');
    }

    private function getType()
    {
        return $this->getMock('\Symfony\Component\Form\FormTypeInterface');
    }
}