<div class="form-group">
    <label for="{{ $id }}" class="col-sm-3 col-md-3 col-xs-12 col-lg-3 control-label">{{ $jhtmlLabel }}
        @if($jhtmlRequired)
        <span class="text-danger">*</span>
        @endif
    </label>
    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
        <?php
        $jhtmlClass = '';
        if (is_array($jhtmlCssClass) && count($jhtmlCssClass) > 0) {
            $jhtmlClass = implode(' ', $jhtmlCssClass);
        }
        ?>
        @if(Joncasas\Html\AbstractObjectHtml::TEXT==$jhtmlType||Joncasas\Html\AbstractObjectHtml::FILE==$jhtmlType||Joncasas\Html\AbstractObjectHtml::NUMBER==$jhtmlType||Joncasas\Html\AbstractObjectHtml::EMAIL==$jhtmlType||Joncasas\Html\AbstractObjectHtml::CHECKBOX==$jhtmlType)
            @include('HTML::default')
        @else
            @include(sprintf('HTML::%s',$jhtmlType))
        @endif

    </div>
</div>