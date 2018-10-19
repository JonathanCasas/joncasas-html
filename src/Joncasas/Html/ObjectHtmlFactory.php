<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Joncasas\Html;

use Joncasas\Html\Inputs\DefaultInput;

/**
 * Description of ObjectHtmlFactory
 *
 * @author jonathan
 */
class ObjectHtmlFactory implements InterfaceHtmlFactory {

    /**
     * @var ObjectHtmlFactory
     */
    private static $__instance;

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
    public function createObjectForm(bool $inline, string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        if ($type == ObjectHtml::TEXT || $type == ObjectHtml::NUMBER || $type == ObjectHtml::FILE || $type == ObjectHtml::EMAIL || $type == ObjectHtml::PASSWORD || $type == ObjectHtml::CHECKBOX) {
            return new DefaultInput($inline, $type, $name, $label, $value, $id, $cssClass, $options);
        }
    }

    /**
     * @return ObjectHtmlFactory
     */
    static function getInstance(): ObjectHtmlFactory {
        if (is_null(self::$__instance)) {
            self::$__instance = new ObjectHtmlFactory();
        }
        return self::$__instance;
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function text(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::TEXT, $name, $label, $value, $id, $cssClass, $options);
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function number(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::NUMBER, $name, $label, $value, $id, $cssClass, $options);
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function file(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::FILE, $name, $label, $value, $id, $cssClass, $options);
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function email(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::EMAIL, $name, $label, $value, $id, $cssClass, $options);
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function password(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::PASSWORD, $name, $label, $value, $id, $cssClass, $options);
    }

    /**
     * @param bool $inline
     * @param string $name
     * @param string $label
     * @param mixed $value
     * @param string $id
     * @param array $cssClass
     * @param array $options
     *
     * @return ObjectHtml
     */
    public function checkbox(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): ObjectHtml {
        return $this->createObjectForm($inline, ObjectHtml::CHECKBOX, $name, $label, $value, $id, $cssClass, $options);
    }

}
