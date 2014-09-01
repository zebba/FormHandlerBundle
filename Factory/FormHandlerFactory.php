<?php

namespace Zebba\Bundle\FormHandlerBundle\Factory;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormTypeInterface;
use Zebba\Component\Form\Handler;
use Zebba\Component\Form\SubmissionHandler;

class FormHandlerFactory
{
	/** @var FormFactoryInterface */
	private $factory;

	/**
	 * Constructor
	 *
	 * @param FormFactoryInterface $factory
	 */
	public function __construct(FormFactoryInterface $factory)
	{
		$this->factory = $factory;
	}

	/**
	 *
	 * @param FormTypeInterface $type
	 * @param SubmissionHandler $handler
	 * @return FormHandlerInterface
	 */
	public function get(FormTypeInterface $type,
		SubmissionHandler $handler = null)
	{
		return new Handler($type,
			$this->factory,
			$handler
		);
	}
}
