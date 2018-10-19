<div class="form-group">
    <label for="{{ $id }}" class="control-label">{{ $label }}
        @if($required)
        <span class="text-danger">*</span>
        @endif
    </label>
    @php
    $class = '';
    if (is_array($cssClass) && count($cssClass) > 0) {
        $class = implode(' ', $cssClass);
    }
    @endphp
    @if(Joncasas\Html\AbstractObjectHtml::TEXT==$type||Joncasas\Html\AbstractObjectHtml::FILE==$type||Joncasas\Html\AbstractObjectHtml::NUMBER==$type||Joncasas\Html\AbstractObjectHtml::EMAIL==$type||Joncasas\Html\AbstractObjectHtml::CHECKBOX==$type)
        @include('HTML::default')
    @else
        @include(sprintf('HTML::%s',$type))
    @endif
</div>