<?php
/**
 * CraftyonsField plugin for Craft CMS
 *
 * CraftyonsField_Craftyons Model
 *
 * --snip--
 * Models are containers for data. Just about every time information is passed between services, controllers, and
 * templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 * --snip--
 *
 * @author    James Greig
 * @copyright Copyright (c) 2018 James Greig
 * @link      https://www.greig.cc
 * @package   CraftyonsField
 * @since     0.1
 */

namespace Craft;

class CraftyonsField_CraftyonsModel extends BaseModel
{
    /**
     * Defines this model's attributes.
     *
     * @return array
     */
    protected function defineAttributes()
    {
        return array_merge(parent::defineAttributes(), array(
            'someField'     => array(AttributeType::String, 'default' => 'some value'),
        ));
    }

}