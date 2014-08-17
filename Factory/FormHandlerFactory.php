<?php

namespace Zebba\Bundle\FormHandlerBundle\Factory;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormTypeInterface;
use Psr\Log\LoggerInterface;
use Zebba\Component\Form\Handler;
use Zebba\Component\Form\SubmissionHandler;

class FormHandlerFactory
{
	/** @var FormFactoryInterface */
	private $factory;
	/** @var LoggerInterface */
	private $logger;

	/**
	 * Constructor
	 *
	 * @param FormFactoryInterface $factory
	 * @param LoggerInterface $logger
	 */
	public function __construct(FormFactoryInterface $factory,
		LoggerInterface $logger)
	{
		$this->factory = $factory;
		$this->logger = $logger;
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
			$this->logger,
			$handler
		);
	}
}
