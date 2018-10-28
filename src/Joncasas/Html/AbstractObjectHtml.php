<?php

namespace Joncasas\Html;

use Illuminate\Support\HtmlString;
use function view;

/**
 * Description of ObjectHtml
 *
 * @author jonathan
 */
abstract class AbstractObjectHtml {

    /**
     * @var bool
     */
    private $inline = false;

    /**
     * @var string
     */
    const TEXT = 'text';

    /**
     * @var string
     */
    const TEXTAREA = 'textarea';

    /**
     * @var string
     */
    const FILE = 'file';

    /**
     * @var string
     */
    const NUMBER = 'number';

    /**
     * @var string
     */
    const EMAIL = 'email';

    /**
     * @var string
     */
    const HIDDEN = 'hidden';

    /**
     * @var string
     */
    const CHECKBOX = 'checkbox';

    /**
     * @var string
     */
    const SELECT = 'select';

    /**
     * @var string
     */
    const SELECT2 = 'select2';

    /**
     * @var string
     */
    const PASSWORD = 'password';

    /**
     * @var string
     */
    const RADIO = 'radio';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $id;

    /**
     * @var array()
     */
    private $cssClass;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $value;

    /**
     * @var bool
     */
    private $required = false;

    /**
     * @var string
     */
    private $placeholder;

    /**
     * @var array
     */
    private $options = array();

    /**
     * @var bool
     */
    private $checked = false;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var boolean
     */
    private $multiple = false;

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
     */
    public function __construct(bool $inline, string $type, string $name, string $label, $value = null, string $id = null, array $cssClass = [], array $options = []) {
        $this->inline = $inline;
        $this->name = $name;
        $this->id = $id;
        $this->cssClass = $cssClass;
        $this->label = $label;
        $this->value = $value;
        $this->options = $options;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString() {
        $view = 'HTML::normal';
        if ($this->inline) {
            $view = 'HTML::inline';
        }
        $html = view($view)
                ->with('jhtmlChecked', $this->checked)
                ->with('jhtmlName', $this->name)
                ->with('jhtmlId', $this->id)
                ->with('jhtmlCssClass', $this->cssClass)
                ->with('jhtmlLabel', $this->label)
                ->with('jhtmlValue', $this->value)
                ->with('jhtmlRequired', $this->required)
                ->with('jhtmlPlaceholder', $this->placeholder)
                ->with('jhtmlOptions', $this->options)
                ->with('jhtmlMultiple', $this->multiple)
                ->with('jhtmlType', $this->type)
                ->render();
        $htmlString = new HtmlString($html);
        return $htmlString->toHtml();
    }

    public function getInline() {
        return $this->inline;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getCssClass(): array {
        return $this->cssClass;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getValue() {
        return $this->value;
    }

    public function getRequired() {
        return $this->required;
    }

    public function getPlaceholder() {
        return $this->placeholder;
    }

    public function getOptions() {
        return $this->options;
    }

    public function getChecked() {
        return $this->checked;
    }

    public function getType() {
        return $this->type;
    }

    public function getMultiple() {
        return $this->multiple;
    }

    public function setInline($inline) {
        $this->inline = $inline;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setCssClass(array $cssClass) {
        $this->cssClass = $cssClass;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setRequired($required) {
        $this->required = $required;
        return $this;
    }

    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
        return $this;
    }

    public function setOptions($options) {
        $this->options = $options;
        return $this;
    }

    public function setChecked($checked) {
        $this->checked = $checked;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setMultiple($multiple) {
        $this->multiple = $multiple;
        return $this;
    }

}
