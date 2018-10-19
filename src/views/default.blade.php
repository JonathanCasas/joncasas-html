<input type="{{ $type }}" 
       class="form-control {{ $class }}" 
       id="{{ $id }}" 
       name="{{ $name }}" 
       value="{{ $value }}" 
       placeholder="{{ $placeholder }}"
       @if($required) required @endif >