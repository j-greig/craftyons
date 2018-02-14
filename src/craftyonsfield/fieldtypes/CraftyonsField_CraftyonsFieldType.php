<?php
/**
 * CraftyonsField plugin for Craft CMS
 *
 * CraftyonsField_Craftyons FieldType
 *
 * --snip--
 * Whenever someone creates a new field in Craft, they must specify what type of field it is. The system comes with
 * a handful of field types baked in, and we’ve made it extremely easy for plugins to add new ones.
 *
 * https://craftcms.com/docs/plugins/field-types
 * --snip--
 *
 * @author    James Greig
 * @copyright Copyright (c) 2018 James Greig
 * @link      https://www.greig.cc
 * @package   CraftyonsField
 * @since     0.1
 */

namespace Craft;

class CraftyonsField_CraftyonsFieldType extends BaseFieldType
{
    /**
     * Returns the name of the fieldtype.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('CraftyonsField_Craftyons');
    }

    /**
     * Returns the content attribute config.
     *
     * @return mixed
     */
    public function defineContentAttribute()
    {
        return AttributeType::Mixed;
    }

    /**
     * Returns the field's input HTML.
     *
     * @param string $name
     * @param mixed  $value
     * @return string
     */
    public function getInputHtml($name, $value)
    {
        if (!$value)
            $value = new CraftyonsField_CraftyonsModel();

        $id = craft()->templates->formatInputId($name);
        $namespacedId = craft()->templates->namespaceInputId($id);

/* -- Include our Javascript & CSS */

        craft()->templates->includeCssResource('craftyonsfield/css/fields/CraftyonsField_CraftyonsFieldType.css');
        craft()->templates->includeJsResource('craftyonsfield/js/fields/CraftyonsField_CraftyonsFieldType.js');

/* -- Variables to pass down to our field.js */

        $jsonVars = array(
            'id' => $id,
            'name' => $name,
            'namespace' => $namespacedId,
            'prefix' => craft()->templates->namespaceInputId(""),
            );

        $jsonVars = json_encode($jsonVars);
        craft()->templates->includeJs("$('#{$namespacedId}-field').CraftyonsField_CraftyonsFieldType(" . $jsonVars . ");");

/* -- Variables to pass down to our rendered template */

        $variables = array(
            'id' => $id,
            'name' => $name,
            'namespaceId' => $namespacedId,
            'values' => $value
            );

        return craft()->templates->render('craftyonsfield/fields/CraftyonsField_CraftyonsFieldType.twig', $variables);
    }

    /**
     * Returns the input value as it should be saved to the database.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValueFromPost($value)
    {
        return $value;
    }

    /**
     * Prepares the field's value for use.
     *
     * @param mixed $value
     * @return mixed
     */
    public function prepValue($value)
    {
        return $value;
    }
}