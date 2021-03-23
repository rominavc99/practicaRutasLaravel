        @extends('layout')
        @section('content')
        
        <main class="content">
            <div class="cards">
            <!-- TARJETA DINAMICA -->

            @forelse ($notas as $nota)

            <div class="card card-small">
                    <div class="card-body">
                        <h4>{{ $nota->titulo }}</h4>

                        <p>
                        {!! $nota->contenido!!} <!--@todo sanitizar HTML para evitar ataque XSS-->
                        </p>
                    </div>

                    <footer class="card-footer">
                    <a href="{{ route('notas.edit', ['id' => $nota-> id]) }}" class="action-link action-edit">
                            <i class="icon icon-pen"></i>
                        </a>
                        <a class="action-link action-delete">
                            <i class="icon icon-trash"></i>
                        </a>
                        <form method="POST" action="{{ url("notas/{$nota->id}") }}">
                        @csrf
                        @method('DELETE')
                        <a class="action-link action-delete">
                            <button class="action-link"><i class="icon icon-trash"></i></button>
                        </a>
                    </form>
                    </footer>

                </div>

                @empty
                    <p> No hay elementos disponibles <a href="/agregar"> agregar nota </a> </p>

                @endforelse


            </div>
        </main>

        @endsection
        
