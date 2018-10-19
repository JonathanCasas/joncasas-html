<div class="row">
    <div class="col-md-6">
        {!! $html->text(false,'test','Pruebas de aplicacion') !!}
    </div>
    <div class="col-md-6">
        {!! $html->number(false,'test2','Pruebas de aplicacion 2') !!}
    </div>
    <div class="col-md-6">
        {!! $html->textarea(false,'test3','Pruebas de aplicacion 3') !!}
    </div>
    <div class="col-md-6">
        {!! $html->select(false,'test3','Pruebas de aplicacion 3')->setOptions(array('hola'=>'Mundo'))->setPlaceholder('seleccione')->setRequired(true) !!}
    </div>
    <div class="col-md-6">
        {!! $html->radio(false,'test3','Pruebas de aplicacion 3')->setOptions(array('hola'=>'Mundo','bebe'=>'como')) !!}
    </div>
    <div class="col-md-6">
        {!! $html->select2(false,'test3','Pruebas de aplicacion 3')->setOptions(array('hola'=>'Mundo'))->setPlaceholder('seleccione')->setRequired(true) !!}
    </div>
</div>
