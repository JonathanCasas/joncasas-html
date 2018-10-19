<div class="form-group">
    <label for="{{ $id }}" class="col-sm-3 col-md-3 col-xs-12 col-lg-3 control-label">{{ $label }}
        @if($required)
        <span class="text-danger">*</span>
        @endif
    </label>
    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
        <?php
        $class = '';
        if (is_array($cssClass) && count($cssClass) > 0) {
            $class = implode(' ', $cssClass);
        }
        ?>
        @if(Joncasas\Html\AbstractObjectHtml::TEXT==$type||Joncasas\Html\AbstractObjectHtml::FILE==$type||Joncasas\Html\AbstractObjectHtml::NUMBER==$type||Joncasas\Html\AbstractObjectHtml::EMAIL==$type||Joncasas\Html\AbstractObjectHtml::CHECKBOX==$type)
            @include('HTML::default')
        @else
            @include(sprintf('HTML::%s',$type))
        @endif

    </div>
</div>