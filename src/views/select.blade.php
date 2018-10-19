<select class="form-control {{ $class }}" id="{{ $id }}" name="{{ $name }}"
        @if($required) required @endif 
        @if($multiple) multiple @endif>
        <option value="">{{ $placeholder }}</option>
    @foreach($options as $key=> $option)
    <option value="{{ $key }}" @if($value==$key) selected @endif>{{ $option }}</option>
    @endforeach
</select>