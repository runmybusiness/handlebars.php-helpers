<?php
/*
 * This file is part of Handlebars.php Helpers Set
 *
 * (c) Dmitriy Simushev <simushevds@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RunMyBusiness\HandlebarsHelpers\Tests\Str;

use RunMyBusiness\HandlebarsHelpers\Str\Helpers;

/**
 * Test class for String Helpers Set.
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
            array('lowercase', '\\RunMyBusiness\\HandlebarsHelpers\\Str\\LowercaseHelper'),
            array('uppercase', '\\RunMyBusiness\\HandlebarsHelpers\\Str\\UppercaseHelper'),
            array('repeat', '\\RunMyBusiness\\HandlebarsHelpers\\Str\\RepeatHelper'),
            array('replace', '\\RunMyBusiness\\HandlebarsHelpers\\Str\\ReplaceHelper'),
            array('truncate', '\\RunMyBusiness\\HandlebarsHelpers\\Str\\TruncateHelper'),
        );
    }
}
