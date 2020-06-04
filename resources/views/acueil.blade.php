@extends('layouts.app')
@section('content')
<br>
@forelse ($actualite as $a)
<br>

<div class="info  p-4" style="min-width: 100%; background: #F1F5E6;">
    @foreach ($a->etudiant()->get() as $et)
       
       
       
            @if ($et->img)
            <img src="/img/{{$et->img}}" class="image rounded-circle" alt="">
            @else
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            @endif
           
            
           <b class="text-uppercase" > {{__($et->nom)." ".__($et->prenom)}}</b> Publier à  &nbsp;<i style="color: limegreen"> {{$a->created_at}}</i></p>
       
        
        @endforeach 
    
  <h3 style="color: red; text-align: center">{{$a->titre}} </h3>
 <div>
@if ($a->img)
<img src="img/{{$a->img}}"   style="width: 15em; max-height: 8em;" class="rounded" alt="">
@endif
 
  
    
</div>
<div>

<p>{{$a->discription}}</p>

@if ($a->lien)
<a  class="btn btn-primary" href="{{$a->lien}}">Continuer pour postuler</a>
@endif 
</div>
@if (Auth::guard('web')->user()->cne=='D131906448')
<div style="margin-left: 90%">
    <button   class="btn btn-danger" style="margin-left: 50%" > <i class="fas fa-trash"></i></button>
</div>  
@endif


</div>
@empty
<li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>Pas d'actualiter  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
@endforelse




 
@endsection
