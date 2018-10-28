<select class="form-control {{ $jhtmlClass }}" name="{{ $jhtmlName }}{{$jhtmlMultiple?'[]':''}}" id="{{ $jhtmlId }}"
        @if($jhtmlRequired) required  @endif 
        @if($jhtmlMultiple) multiple @endif>
    @if(!is_null($jhtmlValue)&&!$jhtmlMultiple)
    <option value="{{ $jhtmlValue['id'] }}" selected="">{{ $jhtmlValue['text'] }}</option>
    @else
    @foreach($jthmlValue as $value)
    <option value="{{ $value['id'] }}" selected="">{{ $value['text'] }}</option>
    @endforeach
    @endif
</select>