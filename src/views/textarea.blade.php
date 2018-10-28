<textarea class="form-control {{$jhtmlClass}}" 
          id="{{ $jhtmlId }}" 
           placeholder="{{ $jhtmlPlaceholder }}"
          name="{{ $jhtmlName }}" 
          @if($required)@ required @endif>{{ $jhtmlValue }}</textarea>