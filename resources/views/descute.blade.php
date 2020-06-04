<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    

@foreach ($data as $a)
<div class="card" >
    
  <div class="card-footer">
    @foreach ($etudiant as $et)
    @if ($et->id==$a->etudiant_id)
    <P class=" text-success"> {{$et->nom}} </P>
    @endif
    
    @endforeach
    
    <P  > {{$a->sujet}}
      @if (Auth::guard('web')->user()->cne=='D131906448')
      
      <a  style="margin-left: 70%;" class="btn btn-danger" href="{{ route('deconnexion') }}"
      onclick="event.preventDefault();
                    document.getElementById('dellet_descut').submit();">supprimer</a>
       @endif
    
    </P>

    <form id="dellet_descut" method="POST" action="" style="display: none;">
      @csrf
      @method('DELETE')
          
  </form>

  </div>


</div> 
@endforeach


<div class="card" id="message">
<form action=" {{ url('/descution')}} " method="post" >
  {{-- <div class="card" > --}}
  
    <div class="card-footer" style="display: inline-flex;">
    <div style="min-width: 80%" >  <textarea  class="form-control" placeholder="votre message"  name="descute" ></textarea></div>
    &nbsp;&nbsp; &nbsp; 
     <div style="padding-top: 15px"> <button type="submit" class="btn btn-success"> <span class="fa fa-send"></span> </button>
      </div>

    </div>
 
  {{-- </div> --}}
</form>
</div>
