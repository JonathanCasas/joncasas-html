<select class="form-control {{ $jhtmlClass }}" id="{{ $jhtmlId }}" name="{{ $jhtmlName }}{{ $jhtmlMultiple?'[]':'' }}"
        @if($jhtmlRequired) required @endif 
        @if($jhtmlMultiple) multiple @endif>
        <option value="">{{ $jhtmlPlaceholder }}</option>
    @foreach($jhtmlOptions as $key=> $option)
    @if($jhtmlMultiple)
    <option value="{{ $key }}" @if(in_array($key, $jhtmlValue)) selected @endif>{{ $option }}</option>
    @else
    <option value="{{ $key }}" @if($jhtmlValue==$key) selected @endif>{{ $option }}</option>
    @endif
    @endforeach
</select>