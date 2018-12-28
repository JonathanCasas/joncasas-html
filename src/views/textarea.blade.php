<textarea class="form-control {{$jhtmlClass}}" 
          id="{{ $jhtmlId }}" 
           placeholder="{{ $jhtmlPlaceholder }}"
          name="{{ $jhtmlName }}" 
          @if($jhtmlRequired)@ required @endif>{{ $jhtmlValue }}</textarea>