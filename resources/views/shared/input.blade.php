@php 

$label ??= ucfirst($name) ;
$type ??= 'text';
$class ??= null;
$name ??= '';
$value ??= '';
@endphp


<div @class(['form-group',$class])>

<label for="{{ $name }}">{{ $label }}</label>

@if($type === 'textarea')

<textarea   id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror " >{{ old($name,$value)}}</textarea>
@error($name)
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror

@else 

<input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror " value="{{ old($name,$value)}}">
@error($name)
   <div class="invalid-feedback">
       {{ $message }}
   </div>
@enderror

@endif

</div>