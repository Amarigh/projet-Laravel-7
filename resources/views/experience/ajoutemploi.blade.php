@extends('layouts.app')

@section('script')
$("#entreprise").hide();

$("select.entreprise").change(function () {
    var langage = $(this).children("option:selected").val();

   if (langage == 'autre') {

       $("#entreprise").show();


    }
   else $("#entreprise").hide();
});
@endsection

@section('content')
    
<div class=" row justify-content-md-center" id="afficheemploi"   >
    <div class="col-6">
<form   style="background-color:#d2eeee;padding: 10%; margin-top:6%;" method="post" action="{{route('emploi.store')}}" enctype="multipart/form-data">
  @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Nom d"emploi</label>
            <input type="text" class="form-control @error('titre') is-invalid @enderror" id="exampleFormControlInput1" placeholder="titre d'emploi" name="titre" value="{{ old('titre') }}" required>
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
            <label for="ent1">Entreprise</label> &nbsp;&nbsp
            <select name="selectentreprise" class="entreprise" id="ent1">
                {{-- @foreach ($data as $a) --}}
            {{-- <option value="{{$a->nom}}">{{$a->nom}}</option> --}}
            @foreach ($data as $a)
            @if ($a!='enligne')
            <option value="{{$a->nom}}">{{ $a->nom}}</option>
            @endif
                    @endforeach
                {{-- @endforeach --}}
                <option value="autre">autre</option>
            </select>
        </div>
          
        <div class="form-group" id="entreprise">
            <label for="entreprise_">entreprise</label>
            <input type="text" class="form-control" id="entreprise_" name="entreprise" placeholder="entreprise">
        </div>
                   
            
        
        <div class="form-group">
            <label for="01f">Description d'emploi</label>
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