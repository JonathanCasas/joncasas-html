@foreach($options as $key => $value)
<input type="radio" name="{{ $name }}" id="{{ $id.$key }}" class="{{ $class }}" value="{{ $key }}"
       @if($value==$key) selected @endif
       @if($required) required @endif>
       <label for="{{ $id.$key }}">{{ $value }}</label><br>
@endforeach