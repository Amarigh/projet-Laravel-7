@extends('layouts.app')
@section('content')
    

<br>
@forelse ($data as $a)
<br>

<div class="info  p-4" style="min-width: 100%;background: #F1F5E6;">
    @foreach ($a->etudiant()->get() as $et)
       
       
       
            @if ($et->img)
            <img src="/img/{{$et->img}}" class="image rounded-circle" alt="">
            @else
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            @endif
           
            
           <b class="text-uppercase" > {{__($et->nom)." ".__($et->prenom)}}</b> Publier à  &nbsp;<i style="color: limegreen"> {{$a->created_at}}</i></p>
       
        
        @endforeach 
    
  <h3 style="color: red; text-align: center">{{$a->titre}} </h3>
  <br>
 <div>
@if ($a->img)
<img src="img/{{$a->img}}"   style="width: 15em; max-height: 8em;" class="rounded" alt="">
<br>
@endif
  
</div>
<div>

<p>{{$a->description}}</p>
</div>
<br>


@if ($a->entreprise)
<span class="badge badge-success badge-pill">{{$a->entreprise}}</span>
@endif
@if ($a->ville)
 <span class="badge badge-success badge-pill">{{$a->ville}}</span>
 @endif
<br>
<br>
@if ($a->lien)
<a  class="btn btn-primary" href="{{$a->lien}}">Continuer pour postuler</a>
@endif 

<div style="display:inline-flex">
     
    @if (Auth::guard('web')->user()->cne=='D131906448')
 <form method="POST" action=" {{route('emploi.destroy',['emploi'=>$a->id])}}">
     @csrf
     @method('DELETE')
         <button class="btn btn-danger" type="submit">supprimer</button>
 </form>
    @endif
  
  
 </div>


<div class="col-xl-1 col-"></div>


</div>
@empty
<li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>Pas d'emploi maintenant  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
@endforelse

@endsection 