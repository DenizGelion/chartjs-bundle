<?php

/*
 * This file is part of chartjs-bundle.
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace denizgelion\ContaoChartJsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Routing\RoutingPluginInterface;
use Symfony\Component\Config\Loader\LoaderResolverInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use denizgelion\ContaoChartJsBundle\ContaoChartJsBundle;

class Plugin implements BundlePluginInterface, RoutingPluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoChartJsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
	
	public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
	{
		$file = __DIR__.'/../Resources/config/routing.yml';
		
		return $resolver->resolve($file)->load($file);
	}
}
