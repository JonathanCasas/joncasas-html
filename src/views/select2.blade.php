<select class="form-control {{ $jhtmlClass }}" name="{{ $jhtmlName }}{{$jhtmlMultiple?'[]':''}}" id="{{ $jhtmlId }}"
        @if($jhtmlRequired) required  @endif 
        @if($jhtmlMultiple) multiple @endif>
    @if(!is_null($jhtmlValue)&&!$jhtmlMultiple)
    <option value="{{ $jhtmlValue['id'] }}" selected="">{{ $jhtmlValue['text'] }}</option>
    @else
    @if(is_array($jhtmlValue))
    @foreach($jhtmlValue as $value)
    <option value="{{ $value['id'] }}" selected="">{{ $value['text'] }}</option>
    @endforeach
    @endif
    @endif
</select>