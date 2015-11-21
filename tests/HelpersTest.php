<?php
/*
 * This file is part of Handlebars.php Helpers Set
 *
 * (c) Dmitriy Simushev <simushevds@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RunMyBusiness\HandlebarsHelpers\Tests;

use RunMyBusiness\HandlebarsHelpers\Helpers;

/**
 * Test class for Global Helpers Set.
 *
 * @author Dmitriy Simushev <simushevds@gmail.com>
 */
class HelpersTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that all helpers in the set exist and have valid classes.
     *
     * @dataProvider helpersProvider
     */
    public function testHelper($name, $class)
    {
        $helpers = new Helpers();

        $this->assertTrue($helpers->has($name), sprintf('There is no "%s" helper', $name));
        $this->assertInstanceOf($class, $helpers->{$name});
    }

    /**
     * A data provider for testHelper method.
     */
    public function helpersProvider()
    {
        return array(
            // Date helpers
            array('formatDate', '\\RunMyBusiness\\HandlebarsHelpers\\Date\\FormatDateHelper'),

            // Collection helpers
            array('count', '\\RunMyBusiness\\HandlebarsHelpers\\Collection\\CountHelper'),
            array('first', '\\RunMyBusiness\\HandlebarsHelpers\\Collection\\FirstHelper'),
            array('last', '\\RunMyBusiness\\HandlebarsHelpers\\Collection\\LastHelper'),

            // Comparison helpers
            array('ifAny', '\\RunMyBusiness\\HandlebarsHelpers\\Comparison\\IfAnyHelper'),
            array('ifEqual', '\\RunMyBusiness\\HandlebarsHelpers\\Comparison\\IfEqualHelper'),
            array('ifEven', '\\RunMyBusiness\\HandlebarsHelpers\\Comparison\\IfEvenHelper'),
            array('ifOdd', '\\RunMyBusiness\\HandlebarsHelpers\\Comparison\\IfOddHelper'),
            array('unlessEqual', '\\RunMyBusiness\\HandlebarsHelpers\\Comparison\\UnlessEqualHelper'),

            // String helpers
            array('lowercase', '\\RunMyBusiness\\HandlebarsHelpers\\String\\LowercaseHelper'),
            array('uppercase', '\\RunMyBusiness\\HandlebarsHelpers\\String\\UppercaseHelper'),
            array('repeat', '\\RunMyBusiness\\HandlebarsHelpers\\String\\RepeatHelper'),
            array('replace', '\\RunMyBusiness\\HandlebarsHelpers\\String\\ReplaceHelper'),
            array('truncate', '\\RunMyBusiness\\HandlebarsHelpers\\String\\TruncateHelper'),

            // Layout helpers
            array('block', '\\RunMyBusiness\\HandlebarsHelpers\\Layout\\BlockHelper'),
            array('extends', '\\RunMyBusiness\\HandlebarsHelpers\\Layout\\ExtendsHelper'),
            array('override', '\\RunMyBusiness\\HandlebarsHelpers\\Layout\\OverrideHelper'),
            array('ifOverridden', '\\RunMyBusiness\\HandlebarsHelpers\\Layout\\IfOverriddenHelper'),
            array('unlessOverridden', '\\RunMyBusiness\\HandlebarsHelpers\\Layout\\UnlessOverriddenHelper'),
        );
    }
}
