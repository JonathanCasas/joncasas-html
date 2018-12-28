<input type="{{ $jhtmlType }}" 
	   @if($jhtmlMultiple) multiple="true" @endif 
       class="form-control {{ $jhtmlClass }}" 
       id="{{ $jhtmlId }}" 
       name="{{ $jhtmlName }}" 
       value="{{ $jhtmlValue }}" 
       placeholder="{{ $jhtmlPlaceholder }}"
       @if($jhtmlRequired) required @endif >