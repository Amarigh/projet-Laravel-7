@extends('layouts.app')

@section('content')
    
<div class=" row justify-content-md-center" id="afficheecole"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('ecole.store')}}" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"école</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre d'école" name="titre" value="{{ old('titre') }}" required>
            @error('titre') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">ville </label>
            <input type="text" class="form-control @error('ville') is-invalid @enderror" id="exampleFormControlInput1" name="ville" placeholder="La ville où situe l'offre" value="{{ old('ville') }}" required>
            @error('ville') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

       
        <div class="form-group">
            <label for="01f">Description de l'école</label>
            <textarea class="form-control @error('ville') is-invalid @enderror" id="01f" placeholder="Dscription d'offre" name="description" rows="7" value="{{ old('description') }}" required></textarea>
            @error('description') 
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="lien">Lien s'il existe </label>
            <input type="text" class="form-control" id="lien" name="lien" placeholder="lien s'il existe" value="{{ old('lien') }}">
        </div>
        
       
      <br>
      <div class="form-group">
           
        <div class="custom-file form-group">
            <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" >
            <label class="custom-file-label" for="validatedCustomFile">image s'il existe</label>
        </div>
    </div>
      <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">enregistrer</button>
        </div>
    </form>
</div>
</div>


@endsection