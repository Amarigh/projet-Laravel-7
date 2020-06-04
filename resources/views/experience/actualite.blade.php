@extends('layouts.app')
@section('content')
<div class="row justify-content-center">

    <div class="login col-6">
        <form style="background-color:#d2eeee;padding: 10%; margin-top:5%;" method="post" action="{{route('actualite.store')}} " enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleFormControlInput1">Sujet d'actualité</label>
                <input type="text" class="form-control" name="titre" id="exampleFormControlInput1" placeholder="sujet d'actualité" required>
            </div>
          
    
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Description D'actualité</label>
                <textarea class="form-control" name="discription" id="exampleFormControlTextarea2" placeholder="Description D'actualité" rows="7" required></textarea>
            </div>
            <div class="form-group">
                <label for="lien">Lien s'il existe </label>
                <input type="text" class="form-control" name="lien" id="lien"  placeholder="lien s'il existe" value="{{ old('lien') }}">
            </div>
            <div class="form-group">
                
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choisir img...</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">partager</button>
            </div>
        </form>
    </div>

</div>
@endsection