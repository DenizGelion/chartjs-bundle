<?php

namespace denizgelion\ContaoChartJsBundle\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\RouterInterface;

class NavigationListener
{
	protected $requestStack;
	protected $router;
	
	public function __construct(RequestStack $requestStack, RouterInterface $router)
	{
		$this->requestStack = $requestStack;
		$this->router = $router;
	}
	
	public function onGetUserNavigation($arrModules)
	{
		$request = $this->requestStack->getCurrentRequest();
		
		$arrModules['system']['modules'] = array_merge(
			[
				'challonge' => [
					'label' => 'ChartJs integration',
					'class' => 'navigation challonge',
					'href'  => $this->router->generate('denizgelion_backend_chartjs'),
					'isActive' => 'denizgelion_backend_chartjs' === $request->attributes->get('_route'),
				],
			],
			$arrModules['system']['modules']
		);
		
		return $arrModules;
	}
}