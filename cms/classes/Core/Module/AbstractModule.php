<?php
namespace CENSUS\Core\Module;


abstract class AbstractModule
{
	/**
	 * @var \CENSUS\Model\Request
	 */
	private $request = null;

	/**
	 * @var \CENSUS\Core\View
	 */
	protected $view = null;

	/**
	 * @var array
	 */
	protected $configuration = [];

	/**
	 * Initialize the module
	 */
	abstract protected function initializeModule();

	/**
	 * AbstractModule constructor
	 *
	 * @param array $configuration
	 * @param \CENSUS\Core\View $view
	 * @param \CENSUS\Model\Request $request
	 */
	public function __construct($request, $view, $configuration)
	{
		$this->request = $request;
		$this->view = $view;
		$this->configuration = $configuration;

		$this->initializeModule();
		$this->handleModuleRequest();
	}

	/**
	 * Call the requested context for each module
	 */
	private function handleModuleRequest()
	{
		$context = $this->request->getArgument('context');
		$contextMethodName = $context . 'Context';

		if (null === $context) {
			$contextMethodName = 'indexContext';
		}

		if (method_exists($this, $contextMethodName)) {
			$this->$contextMethodName();
		}
	}
}