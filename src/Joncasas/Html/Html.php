<?php

namespace Joncasas\Html;

class Html {

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
    public static function text(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->text($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function number(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->number($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function file(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->file($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function email(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->email($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function password(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->password($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function checkbox(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->checkbox($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function textarea(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->textarea($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function select(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->select($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function radio(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->radio($inline, $name, $label, $value, $id, $cssClass, $options);
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
    public static function select2(bool $inline, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []): AbstractObjectHtml {
        return ObjectHtmlFactory::getInstance()->select2($inline, $name, $label, $value, $id, $cssClass, $options);
    }

}
