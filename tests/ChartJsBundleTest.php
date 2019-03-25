<?php

/*
 * This file is part of chartjs-bundle.
 *
 * (c) Deniz Gelion
 *
 * @license LGPL-3.0-or-later
 */

namespace denizgelion\ChartJsBundle\Tests;

use denizgelion\ChartJsBundle\ContaoChartJsBundle;
use PHPUnit\Framework\TestCase;

class ChartJsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoChartJsBundle();

        $this->assertInstanceOf('denizgelion\ChartJsBundle\ContaoChartJsBundle', $bundle);
    }
}
