@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard -
                    @if(Auth::user()->user_type_id === 1)
                        Desenvolvedor
                    @elseif(Auth::user()->user_type_id === 2)
                        Administrador
                    @elseif(Auth::user()->user_type_id === 3)
                        Funcionario
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Você está logado como usuário</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
