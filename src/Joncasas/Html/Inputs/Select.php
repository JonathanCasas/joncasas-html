<?php

namespace Joncasas\Html\Inputs;

use Joncasas\Html\ObjectHtml;

/**
 * Description of Select
 *
 * @author jonathan
 */
class Select extends ObjectHtml {

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     * 
     */
    public function __construct(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = array(), array $options = array()) {
        parent::__construct($inline, ObjectHtml::SELECT, $name, $label, $value, $id, $cssClass, $options);
    }

}
