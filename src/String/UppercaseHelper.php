<?php
/*
 * This file is part of Handlebars.php Helpers Set
 *
 * (c) Dmitriy Simushev <simushevds@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RunMyBusiness\HandlebarsHelpers\String;

use Handlebars\Context;
use Handlebars\Helper as HelperInterface;
use Handlebars\Template;

/**
 * Converts a string to uppercase.
 *
 * Usage:
 * ```handlebars
 *   {{uppercase string}}
 * ```
 *
 * Arguments:
 *  - "string": A string that should be converted to uppercase.
 *
 * @author Dmitriy Simushev <simushevds@gmail.com>
 */
class UppercaseHelper implements HelperInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(Template $template, Context $context, $args, $source)
    {
        $parsed_args = $template->parseArguments($args);
        if (count($parsed_args) != 1) {
            throw new \InvalidArgumentException(
                '"uppercase" helper expects exactly one argument.'
            );
        }

        return strtoupper($context->get($parsed_args[0]));
    }
}
