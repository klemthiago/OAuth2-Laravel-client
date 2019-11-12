@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Contato</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <form method="POST" action="{{ route('contact.store') }}">
                          {{ csrf_field() }}
                        <div class="form-group row">
                          <label for="inputNome" class="col-sm-2 col-form-label">Nome</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" placeholder="Seu nome completo">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="email" placeholder="email@empresa.com.br">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputTelefone" class="col-sm-2 col-form-label">Tel. Celular</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="celular" placeholder="(00) 00000-0000">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Enviar dados</button>
                          </div>
                        </div>
                    </form>                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
