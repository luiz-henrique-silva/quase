{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="dashboard">
        <div class="sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="{{ route('projects.index') }}">Meus Projetos</a></li>
                <li><a href="{{ route('projects.create') }}">Projetos Enviados</a></li>
                @if(auth()->user()->type === 'professor')
                    <li><a href="{{ route('projects.approve') }}">Aprovar Projetos</a></li>
                @endif
            </ul>
        </div>

        <div class="content">
            <h1>Dashboard</h1>
            {{-- Aqui você pode incluir o conteúdo do dashboard, como a lista de projetos ou mensagens --}}
            @yield('dashboard-content')
        </div>
    </div>
@endsection
