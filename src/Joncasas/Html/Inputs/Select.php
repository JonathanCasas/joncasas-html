<?php

namespace Joncasas\Html\Inputs;

use Joncasas\Html\AbstractObjectHtml;

/**
 * Description of Select
 *
 * @author jonathan
 */
class Select extends AbstractObjectHtml {

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
        parent::__construct($inline, AbstractObjectHtml::SELECT, $name, $label, $value, $id, $cssClass, $options);
    }

}
