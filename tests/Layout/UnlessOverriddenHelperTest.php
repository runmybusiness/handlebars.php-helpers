<?php
/*
 * This file is part of Handlebars.php Helpers Set
 *
 * (c) Dmitriy Simushev <simushevds@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RunMyBusiness\HandlebarsHelpers\Tests\Layout;

use RunMyBusiness\HandlebarsHelpers\Layout\BlockStorage;
use RunMyBusiness\HandlebarsHelpers\Layout\UnlessOverriddenHelper;

/**
 * Test class for "unlessOverridden" helper.
 *
 * @author Dmitriy Simushev <simushevds@gmail.com>
 */
class UnlessOverriddenHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that exception is thrown if wrong number of arguments is used.
     *
     * @expectedException InvalidArgumentException
     * @dataProvider wrongArgumentsProvider
     */
    public function testArgumentsCount($template)
    {
        $storage = new BlockStorage();
        $helpers = new \Handlebars\Helpers(array('unlessOverridden' => new UnlessOverriddenHelper($storage)));
        $engine = new \Handlebars\Handlebars(array('helpers' => $helpers));

        $engine->render($template, array());
    }

    /**
     * A data provider for testArgumentsCount method.
     */
    public function wrongArgumentsProvider()
    {
        return array(
            // Not enough arguments
            array('{{#unlessOverridden}}false{{else}}true{{/unlessOverridden}}'),
            // Too much arguments
            array('{{#unlessOverridden "arg1" "arg2"}}false{{else}}true{{/unlessOverridden}}'),
        );
    }
}
