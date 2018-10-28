@foreach($jhtmlOptions as $key => $value)
<input type="radio" name="{{ $jhtmlName }}" id="{{ $jhtmlId.$key }}" class="{{ $jhtmlClass }}" value="{{ $key }}"
       @if($value==$key) selected @endif
       @if($required) required @endif>
       <label for="{{ $jhtmlId.$key }}">{{ $value }}</label><br>
@endforeach