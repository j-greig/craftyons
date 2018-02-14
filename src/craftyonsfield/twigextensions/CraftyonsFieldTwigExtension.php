<?php
/**
 * CraftyonsField plugin for Craft CMS
 *
 * CraftyonsField Twig Extension
 *
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
 * @author    James Greig
 * @copyright Copyright (c) 2018 James Greig
 * @link      https://www.greig.cc
 * @package   CraftyonsField
 * @since     0.1
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class CraftyonsFieldTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'CraftyonsField';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'someFilter' => new \Twig_Filter_Method($this, 'someInternalFunction'),
        );
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'someFunction' => new \Twig_Function_Method($this, 'someInternalFunction'),
        );
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
      * @return string
     */
    public function someInternalFunction($text = null)
    {
        $result = $text . " in the way";

        return $result;
    }
}