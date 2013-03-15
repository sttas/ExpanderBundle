<?php

namespace Sli\ExpanderBundle\Tests\Ext;

use Sli\ExpanderBundle\Ext\DynamicContributor;

/**
 * @copyright 2012 Modera Foundation
 * @author Sergei Lissovski <sergei.lissovski@modera.net>
 */
class DynamicContributorTest extends \PHPUnit_Framework_TestCase
{
    public function testThemAll()
    {
        $c1 = new \stdClass();
        $c2 = $c1;

        $dc = new DynamicContributor(array($c1, $c2));
        $this->assertEquals(1, count($dc->getItems()));

        $dc->addItem($c1);
        $this->assertEquals(1, count($dc->getItems()));

        $dc->addItem(new \stdClass());
        $this->assertEquals(2, count($dc->getItems()));
    }
}
