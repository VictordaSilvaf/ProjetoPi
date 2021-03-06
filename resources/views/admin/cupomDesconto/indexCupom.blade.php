@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cssCupons/styles.css') }}">
@endsection
@section('content')
    <div class="container">
            <div class="col-10 tabelaConteudo" style="margin-top: 60px; z-index: 0">
                <h3 class="text-center mb-4">Lista de cupons de desconto</h3>
                @if (Session::has('admin-mensagem-sucesso'))
                    <div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
                @endif
                <table class="container tabelaConteudo2 table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Localizador</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cupons as $cupom)
                        <tr>
                            <th scope="row">
                                <a class="btn-flat tooltipped" href="{{ route('admin.cupons.editar', $cupom->id) }}"
                                   data-position="right" data-delay="50"
                                   data-tooltip="Editar cupom?">
                                    <i class="material-icons black-text">mode_edit</i>
                                </a>
                                <a class="btn-flat tooltipped" href="{{ route('admin.cupons.deletar', $cupom->id) }}"
                                   data-position="right" data-delay="50"
                                   data-tooltip="Deletar cupom?">
                                    <i class="material-icons black-text">delete</i>
                                </a>
                            </th>
                            <td>{{ $cupom->id }}</td>
                            <td>{{ $cupom->nome }}</td>
                            <td>{{ $cupom->localizador }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <a class="btn-floating btn-large blue tooltipped" href="{{ route('admin.cupons.adicionar') }}"
                       title="Adicionar" data-position="top" data-delay="50" data-tooltip="Adicionar cupom?">
                        <i class="material-icons btn btn-success">add</i>
                    </a>
                </div>
            </div>
    </div>
@endsection
