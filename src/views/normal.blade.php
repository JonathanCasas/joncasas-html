<div class="form-group">
    <label for="{{ $jhtmlId }}" class="control-label">{{ $jhtmlLabel }}
        @if($jhtmlRequired)
        <span class="text-danger">*</span>
        @endif
    </label>
    @php
    $jhtmlClass = '';
    if (is_array($jhtmlCssClass) && count($jhtmlCssClass) > 0) {
        $jhtmlClass = implode(' ', $jhtmlCssClass);
    }
    @endphp
    @if(Joncasas\Html\AbstractObjectHtml::TEXT==$jhtmlType||Joncasas\Html\AbstractObjectHtml::FILE==$jhtmlType||Joncasas\Html\AbstractObjectHtml::NUMBER==$jhtmlType||Joncasas\Html\AbstractObjectHtml::EMAIL==$jhtmlType||Joncasas\Html\AbstractObjectHtml::CHECKBOX==$jhtmlType)
        @include('HTML::default')
    @else
        @include(sprintf('HTML::%s',$jhtmlType))
    @endif
</div>
