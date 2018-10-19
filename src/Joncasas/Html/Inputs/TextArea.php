<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Joncasas\Html\Inputs;

use Joncasas\Html\ObjectHtml;

/**
 * Description of TextArea
 *
 * @author jonathan
 */
class TextArea extends ObjectHtml {

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
        parent::__construct($inline, ObjectHtml::TEXTAREA, $name, $label, $value, $id, $cssClass, $options);
    }

}
