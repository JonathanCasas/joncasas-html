<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Joncasas\Html;

use Joncasas\Html\Inputs\DefaultInput;
use Joncasas\Html\Inputs\Radio;
use Joncasas\Html\Inputs\Select;
use Joncasas\Html\Inputs\Select2;
use Joncasas\Html\Inputs\TextArea;

/**
 * Description of ObjectHtmlFactory
 *
 * @author jonathan
 */
class ObjectHtmlFactory implements HtmlFactoryInterface {

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
     * @return AbstractObjectHtml
     */
    public function createObjectForm(bool $inline, string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        if ($type == AbstractObjectHtml::TEXT || $type == AbstractObjectHtml::NUMBER || $type == AbstractObjectHtml::FILE || $type == AbstractObjectHtml::EMAIL || $type == AbstractObjectHtml::PASSWORD || $type == AbstractObjectHtml::CHECKBOX) {
            return new DefaultInput($inline, $type, $name, $label, $value, $id, $cssClass, $options);
        } else if ($type == AbstractObjectHtml::TEXTAREA) {
            return new TextArea($inline, $name, $label, $value, $id, $cssClass, $options);
        } else if ($type == AbstractObjectHtml::SELECT) {
            return new Select($inline, $name, $label, $value, $id, $cssClass, $options);
        } else if ($type == AbstractObjectHtml::RADIO) {
            return new Radio($inline, $name, $label, $value, $id, $cssClass, $options);
        } else if ($type == AbstractObjectHtml::SELECT2) {
            return new Select2($inline, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function text(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::TEXT, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function number(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::NUMBER, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function file(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::FILE, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function email(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::EMAIL, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function password(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::PASSWORD, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function checkbox(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::CHECKBOX, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function textarea(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::TEXTAREA, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function select(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::SELECT, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function radio(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::RADIO, $name, $label, $value, $id, $cssClass, $options);
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
     * @return AbstractObjectHtml
     */
    public function select2(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return $this->createObjectForm($inline, AbstractObjectHtml::SELECT2, $name, $label, $value, $id, $cssClass, $options);
    }

}
