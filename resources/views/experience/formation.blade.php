@extends('layouts.app')
@section('content')
    
<ul class="list-group">
    <div class="row">
    @forelse ($data as $a)
        
    
<div class="card " style="width:400px; margin-top: 3em; background: #F1F5E6;">
    <div class="card-body ">

        @foreach ($etudiant as $et)
        @if ($et->id==$a->etudiant_id)
       
        <p class="card-text " >
            @if ($et->img)
            <img src="/img/{{$et->img}}" class="image rounded-circle" alt="">
            @else
            <img src="/img/vide.png" class="image rounded-circle" alt="">
            @endif
           
            
           <b class="text-uppercase" > {{__($et->nom)}}</b> Publier à  &nbsp;<i style="color: limegreen"> {{$a->created_at}}</i></p>
        @endif
        
        @endforeach
        
        
    </div>    
     @if ($a->img)
     <img src="/img/{{$a->img}}" class="card-img-top rounded" style="max-height: 15em;" alt=""  >
     @endif
 
   
    
    <div class="card-body text-center">
        <h5 class="card-title text-center" style="color:red">{{$a->titre}}</h5>
        <p class="card-text ">{{$a->description}}</p>
       @if ($a->ville)
       <text class="card-text text-center"> Ville : {{$a->ville}}</text> 
       @endif
       @if ($a->entreprise)
       <text class="card-text text-center">entreprise : {{$a->entreprise}}</text> 
       @else 
       <p class="card-text text-center">Formation enligne </p> 
       @endif
       @if ($a->lien)
       <p class="card-text">Voila le lien de formation <a href="{{$a->lien}}" >ici</a> </p> 
       @endif

       @if ($a->durer)
       <p class="card-text">Durer de formation est <span style="color: hotpink;">{{$a->durer}}</span>  </p> 
       @endif
        
        <div style="display:inline-flex">
            {{-- <a href="{{route('children.show',['child'=>$a->id])}}" class="btn btn-primary">Voir le Profile</a>
           <div style="min-width: 5px;"> </div> --}}
    
               
          
           @if (Auth::guard('web')->user()->cne=='D131906448')
           <form method="POST" action="">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" type="submit">supprimer</button>
        </form>
           @endif
         
         
        </div>
    </div>
  </div>
  <div class="col-xl-1 col-"></div>

  

  @empty
  <li class="list-group-item d-flex justify-content-between align-items-center active">
    <p>rien pour le moment  </p>  
    <span class="badge badge-secondary badge-pill">pill1</span>
</li>
  @endforelse
    </div>

</ul>

@endsection