@extends('admin.admin')

@section('title', $property->exists ? "Editer un bien " : "Créer un bien ")

@section('content')



<h1>@yield('title')</h1>

<form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store'  ,[ 'property'=>$property]) }}" method="post" class="v-stack gap-2">
@csrf 


   @method ( $property->exists ? 'put' : 'post')

   <div class="row">
       @include('shared.input', [ 'label'=> 'Titre', 'name'=>'title', 'value'=>$property->title, 'class'=>'col'])
       <div class="col row">
        @include('shared.input', [ 'name'=>'surface', 'value'=>$property->surface, 'class'=>'col'])
        @include('shared.input', [ 'name'=>'price', 'value'=>$property->price, 'class'=>'col','label'=> 'Prix'])
       </div>

       @include('shared.input', [ 'class'=> 'col', 'name'=>'description', 'label'=> 'Description', 'value'=>$property->description, 'type'=>'textarea'])

       <div class="row">

         @include('shared.input', ['class'=>'col', 'name'=> 'rooms', 'label'=>'Rooms', 'value'=> $property->rooms])
         @include('shared.input', ['class'=>'col', 'name'=> 'bedrooms', 'label'=>'Bedrooms', 'value'=> $property->bedrooms])
         @include('shared.input', ['class'=>'col', 'name'=> 'floor', 'label'=>'Floor', 'value'=> $property->floor])
       </div>

       <div class="row">

        @include('shared.input', ['class'=>'col', 'name'=> 'address', 'label'=>'Adress', 'value'=> $property->address])
        @include('shared.input', ['class'=>'col', 'name'=> 'postal_code', 'label'=>'Code Postal', 'value'=> $property->postal_code])
        @include('shared.input', ['class'=>'col', 'name'=> 'city', 'label'=>'City', 'value'=> $property->city])
      </div>
      @include('shared.select', ['name'=>'options', 'label'=>"Options",'value'=> $property->options()->pluck('id'), 'multiple'=> 'true', 'options'=> $options ])
      @include('shared.checkbox', ['name'=>'sold', 'label'=>"Vendu",'value'=>$property->sold])
   </div>
   


   <div class="mt-3"> 
   <button class="btn btn-primary">
           @if ($property->exists)
               Modifier
           @else 
               Créer
            @endif

   </button>

   </div>
</form>
    
@endsection