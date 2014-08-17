<?php

namespace Zebba\Bundle\FormHandlerBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;

class ExtensionTest extends AbstractExtensionTestCase
{
	protected function getContainerExtensions()
	{
		return array(
				new \Zebba\Bundle\FormHandlerBundle\DependencyInjection\ZebbaFormHandlerExtension()
		);
	}

	public function testLoad()
	{
		$this->load();
	}
}