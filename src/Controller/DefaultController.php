<?php

namespace denizgelion\ContaoChartJsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	public function indexAction()
	{
		$this->get('contao.framework')->initialize();
		
		return new Response($this->get('twig')->render('@ContaoChartJsBundle/Default/index.html.twig'));
	}
}