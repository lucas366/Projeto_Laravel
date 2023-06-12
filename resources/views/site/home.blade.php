@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

   {{-- Estrutura de controle--}}

@switch($idade)
    @case(27)
        idade está ok
        @break
    @case(28)
        idade está errada
        @break
    @default
        default
@endswitch

@endsection