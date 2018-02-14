<?php
/**
 * CraftyonsField plugin for Craft CMS
 *
 * CraftyonsField Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    James Greig
 * @copyright Copyright (c) 2018 James Greig
 * @link      https://www.greig.cc
 * @package   CraftyonsField
 * @since     0.1
 */

namespace Craft;

class CraftyonsFieldVariable
{
    /**
     * Whatever you want to output to a Twig template can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.craftyonsField.exampleVariable }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.craftyonsField.exampleVariable(twigValue) }}
     */
    public function exampleVariable($optional = null)
    {
        return "And away we go to the Twig template...";
    }
}