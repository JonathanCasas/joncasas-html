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
    @if(Joncasas\Html\ObjectHtml::TEXT==$type||Joncasas\Html\ObjectHtml::FILE==$type||Joncasas\Html\ObjectHtml::NUMBER==$type||Joncasas\Html\ObjectHtml::EMAIL==$type||Joncasas\Html\ObjectHtml::CHECKBOX==$type)
        @include('HTML::default')
    @else
        @include(sprintf('HTML::%s',$type))
    @endif
</div>