@extends('layouts.main') 

@section('title' , 'Cadastre-se')

@section('content')
<div class="centralizarCadastro">
<form action="/events" method="POST"> 
    @csrf
            <div>
                <label for="nome">Nome completo:</label>
                <br>
                <input type="text" name="nome"  id="nome" required>
            </div>
   
            <div class="pt-3">
                <label for="email">E-mail:</label>
                <br>
                <input type="text" name="email"  id="email" required>
            </div>
            
            <div class="pt-3">
                <label for="especialidade">Especialidade:</label>
                <br>
                <input type="text" name="especialidade"  id="especialidade" required>
            </div>
              
            <input type="submit" class="btn btn-primary mt-3" value="Cadastrar">
                    
    </form>
</div>   
@endsection