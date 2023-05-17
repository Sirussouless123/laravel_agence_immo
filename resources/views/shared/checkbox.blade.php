@php 

$class ??= null;

@endphp



<div @class(["form-check form-switch mt-2 mx-2", $class])>
<input type="hidden" value="0" name="{{ $name }}">
<input type="checkbox" @selected(old($name, $value ?? false ))  name="{{ $name }}" class="form-check-input  @error($name) is-invalid @enderror" value="1" role="switch" id="{{ $name }}" />
<label for="{{ $name }}" class="form-check-label text-info">{{ $label }}</label>
@error($name)
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

</div>