<?php

namespace Joncasas\Html\Inputs;

use Joncasas\Html\AbstractObjectHtml;

/**
 * Description of Radio
 *
 * @author jonathan
 */
class Radio extends AbstractObjectHtml {

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
        parent::__construct($inline, AbstractObjectHtml::RADIO, $name, $label, $value, $id, $cssClass, $options);
    }

}
