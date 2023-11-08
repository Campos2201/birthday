@extends(layouts.main)

@section('title','Fun House')

@section('content')

       <h1>Algum titulo</h1>
       @if(10>5)
            <p>A condicao e verdadeira</p>
       @endif

       <p>{{ $nome }}</p>

       @if($nome == "Pedro")
            <p>O nome é Pedro</p>
       @elseif($nome == "Matheus")
            <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }} </p>
       @else()
       @endif

       @for($i = 0; $i < count($arr); $i++)
            <p> {{ $arr[$i] }} </p>
       @endfor

@endsection