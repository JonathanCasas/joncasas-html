<?php

namespace Joncasas\Html\Inputs;

/**
 * Description of DefaultInput
 *
 * @author jonathan
 */
class DefaultInput extends \Joncasas\Html\ObjectHtml {

    public function __construct(bool $inline, string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = array(), array $options = array()) {
        parent::__construct($inline, $type, $name, $label, $value, $id, $cssClass, $options);
    }

}
