<select class="form-control {{ $class }}" name="{{ $name }}{{$multiple?'[]':''}}" id="{{ $id }}"
        @if($required) required  @endif 
        @if($multiple) multiple @endif>
    @if(!is_null($value)&&!$multiple)
    <option value="{{ $value['id'] }}">{{ $value['text'] }}</option>
    @endif
</select>