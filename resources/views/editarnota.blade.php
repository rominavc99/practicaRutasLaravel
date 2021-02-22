@extends('layout')
        @section('content')
        <main class="content">
            <div class="cards">
                <div class="card card-center">
                    <div class="card-body">
                        <h1>{{ $notas->titulo }}</h1>

                        <form action="">
                            <label for="title" class="field-label">Título: </label>
                            <input type="text" name="title" id="title" class="field-input" value="{{ $notas->titulo }}">
                            <label for="content" class="field-label">Contenido:</label>
                            <textarea name="content" id="content" rows="10" class="field-textarea">{!! $notas->contenido !!}</textarea>

                            <button type="submit" class="btn btn-primary">Editar nota</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        @endsection
view('editar', ['notas' => $notas]);