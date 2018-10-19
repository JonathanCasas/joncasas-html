<?php

namespace Joncasas\Html;

/**
 *
 * @author jonathan
 */
interface InterfaceHtmlFactory {

    /**
     * @param bool $inline
     * @param string $type
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     * 
     * @return ObjectHtml
     */
    public function createObjectForm(bool $inline,string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml;
}
