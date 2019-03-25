<?php

/*
 * This file is part of chartjs-bundle.
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace denizgelion\ContaoChartJsBundle\Tests;

use denizgelion\ContaoChartJsBundle\ContaoChartJsBundle;
use PHPUnit\Framework\TestCase;

class ContaoChartJsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoChartJsBundle();

        $this->assertInstanceOf('denizgelion\ContaoChartJsBundle\ContaoChartJsBundle', $bundle);
    }
}
