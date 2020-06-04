@extends('layouts.app')

@section('content')
<div style="min-height: 3em;"></div>


<div class="info  p-4" style="min-width: 100%; background: #F1F5E6;">
    <div class="container">
    <div class="row">
 
    <div class="col-">
     <I>Membres</I>
</div>


<div class="col-4" style="margin-left:40%;">
    
   
     <input type="text" class="form-control"   placeholder="chercher un membre "> 
    
</div>
@if (Auth::guard('web')->user()->cne=='D131906448')
<div class="col">
      <div class="col">  <a  class="btn btn-info" href="{{route('etudiant.create')}}" >Ajouter l'Etudiant</a> </div>
</div>
@endif 


</div>
<hr>







@foreach ($data as $a)
{{-- <div class="col-md-3 d-flex" style="min-width: 100%;"> --}}
    <div class="info  p-4" style="min-width: 100%; ">
        <div class="row">
 <a href="{{route('etudiant.show',['etudiant'=>$a->id])}} ">   
        <div class="col-">
        @if ($img=$a->img)
        <img src="img/{{$img}}"   style="width: 5em; max-height: 5em;" class="rounded-circle" alt="">
        @else
        <img src="img/vide.png"   style="width: 5em; max-height: 5em;" class="rounded-circle" alt="">
        @endif
    </div>
</a> 

    <div class="col">
        <br>
        
       <a href="{{route('etudiant.show',['etudiant'=>$a->id])}}"> <p> <b > {{$a->nom}} {{$a->prenom}}</b>  </p></a>
       <p > <span class="fas fa-envelope-square"></span><i style="color: green">  {{$a->email}}</i> </p>

    </div>
    <div class="w-100"></div>
    <br>
       @if (Auth::guard('web')->user()->cne=='D131906448')
      
        <div style="display: inline-flex; margin-left: 70%"  >
         <div>   
        <form method="POST" action="{{route('etudiant.destroy',['etudiant'=>$a->id])}} "  >
            @csrf
            @method('DELETE')
                
        
      <button  class="btn btn-danger" type="submit" > Supprimer</button>
    </form>
</div>
      &nbsp;&nbsp;&nbsp;&nbsp

     
       <a  class="btn btn-primary" href="{{route('etudiant.edit',['etudiant'=>$a->id])}}" > modifier</a> 
       
    
 

   </div>
       
       @endif
       
        
    
    
    </div>
    <hr>
    </div>
   
@endforeach

</div>
    </div>


@endsection



















