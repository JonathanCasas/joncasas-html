<div class="form-group">
    <label for="{{ $id }}" class="control-label">{{ $jhtmlLabel }}
        @if($jhtmlRequired)
        <span class="text-danger">*</span>
        @endif
    </label>
    @php
    $class = '';
    if (is_array($cssClass) && count($cssClass) > 0) {
        $class = implode(' ', $cssClass);
    }
    @endphp
    @if(Joncasas\Html\AbstractObjectHtml::TEXT==$jhtmlType||Joncasas\Html\AbstractObjectHtml::FILE==$jhtmlType||Joncasas\Html\AbstractObjectHtml::NUMBER==$jhtmlType||Joncasas\Html\AbstractObjectHtml::EMAIL==$jhtmlType||Joncasas\Html\AbstractObjectHtml::CHECKBOX==$jhtmlType)
        @include('HTML::default')
    @else
        @include(sprintf('HTML::%s',$jhtmlType))
    @endif
</div>