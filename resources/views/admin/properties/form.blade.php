@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien " : "Créer un bien ")

@section('content')

<h1>@yield('title')</h1>

<form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store'  ,[ 'property'=>$property]) }}" method="post">
@csrf 

   @method ( $property->exists ? 'put' : 'post')
</form>
    
@endsection