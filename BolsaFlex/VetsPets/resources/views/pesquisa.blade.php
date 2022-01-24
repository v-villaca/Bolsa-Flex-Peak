@extends('layouts.main')

@section ('title', 'Profissionais')

@section('content')

@foreach($events as $event)

<div class="pesqCad text-center">
<form>
            <div>
                <label for="nome"><h5 class="fw-bolder blueFont">Nome da Profissional:</h5></label>
                <br>
                <p name="nome" id="nome">{{$event->nome}}</P>
             </div>
   
            <div class="pt-3">
                <label for="email"><h5  class="fw-bolder blueFont">E-mail:</h5></label>
                <br>
                <p name="email" id="email">{{$event->email}}</p>
            </div>
            
            <div class="pt-3">
                <label for="especialidade"><h5  class="fw-bolder blueFont">Especialidade:</h5></label>
                <br>
                <p name="especialidade" id="especialidade">{{$event->especialidade}}</p>
            </div>
    </form>   
</div>    

@endforeach


@endsection