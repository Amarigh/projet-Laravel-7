@extends('layouts.app')
@section('content')
   <br>
   <br> 
   <div  style="background: #F1F5E6;"> 
      <div class="container"> 
   @if ($etudiant->id==Auth::guard('web')->id())
   <h4><i>Modification de vos <b>informations personnelle</b></i></h4>
   @else
   <h4><i>Modification d'étudiant <b>{{ $etudiant->nom." ".$etudiant->prenom}}</b></i></h4>
   @endif

<br>
<form action="{{route('etudiant.update',['etudiant'=>$etudiant->id])}} " method="POST">
   @csrf
   @method('PUT')
   @include('etudiant.form')
   <br>
   @if ($etudiant->id==Auth::guard('web')->id())
   <button class="btn btn-block btn-primary" type="submit">modifier</button>
   @else
   <button class="btn btn-block btn-primary" type="submit">modifier l'étudiant</button>
   @endif
  
   



</form>
</div>
</div>
@endsection