@php 

$label ??= ucfirst($name) ;

$class ??= null;
$name ??= '';
$value ??= '';

$options ??= [''];
@endphp


<div @class(['form-group',$class])>

<label for="{{ $name }}">{{ $label }}</label>

<select name="{{ $name }}[]" id="{{ $name }}" multiple>
    @foreach ($options as $k=>$v)
         <option value="{{ $k }}" @selected($value->contains($k) )>{{ $v }}</option>
    @endforeach
</select>
@error($name)
   <div class="invalid-feedback">
       {{ $message }}
   </div>
@enderror
</div>