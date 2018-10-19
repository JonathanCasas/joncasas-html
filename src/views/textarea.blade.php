<textarea class="form-control {{$class}}" 
          id="{{ $id }}" 
           placeholder="{{ $placeholder }}"
          name="{{ $name }}" 
          @if($required)@ required @endif>{{ $value }}</textarea>