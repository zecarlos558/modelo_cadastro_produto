@extends('layout.main')
@section('title')
    Tag
@endsection

@section('content')
    @component('components.title_center')
        Cadastrar Tag
    @endcomponent
    <div class="container-fluid" id="modelo_container">
        <h2>Preencha os dados da Tag</h2>
        <div class="container">
            <form action="{{ route('storeTag') }}" method="POST">
                @csrf
                @component('components.erros_request')@endcomponent
                <div class="mb-3 mt-3">
                    <label for="name">Nome:</label>
                        <input type="text" class="form-control" value="{{ old('name')}}" name="name" id="name" placeholder="Nome da Tag">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar Tag</button>
            </form>
        </div>
    </div>
@endsection
