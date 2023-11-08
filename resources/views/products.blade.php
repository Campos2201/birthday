@extends(layouts.main)

@section('title','Fun House')

@section('content')

    <h1>Esta é a tela de produtos</h1>

    @if($busca !='')
        <p>O usuario esta buscando por: {{ $busca }}</p>
    @endif

@endsection