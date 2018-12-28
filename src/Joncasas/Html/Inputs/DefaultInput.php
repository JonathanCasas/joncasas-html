<?php

namespace Joncasas\Html\Inputs;

use Joncasas\Html\AbstractObjectHtml;

/**
 * Description of DefaultInput
 *
 * @author jonathan
 */
class DefaultInput extends AbstractObjectHtml {

    public function __construct(bool $inline, string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = array(), array $options = array()) {
        parent::__construct($inline, $type, $name, $label, $value, $id, $cssClass, $options);
    }

}
