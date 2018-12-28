@foreach($jhtmlOptions as $key => $value)
<input type="radio" name="{{ $jhtmlName }}" id="{{ $jhtmlId.$key }}" class="{{ $jhtmlClass }}" value="{{ $key }}"
       @if((int)$jhtmlValue==$key&&!is_null($jhtmlValue)) checked="" @endif
       @if($jhtmlRequired) required @endif>
       <label for="{{ $jhtmlId.$key }}">{{ $value }}</label>
@endforeach