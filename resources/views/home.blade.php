@extends('layouts/main-page')
@section('content')
    <main id="stile-main">
        <div id="corpo-pagina">
            <div class="banner-serie">
                SERIE IN CORSO
            </div>
            <div id="comic-cont">
                @foreach ($fumetti as $albo)
                <div>
                    <img src="{{$albo["thumb"]}}" alt="copertina"><br>
                    {{$albo["title"]}}
                </div>
            @endforeach            
        </div>
            <div class="mostra">
                MOSTRA ALTRO
            </div>
        </div>
        <div id="barra-celeste">
            <ul>
                {{-- <li v-for="oggetto in oggetti">
                    <div>
                        <img :src="oggetto.img" alt="shop-pics">
                    </div>
                    <span>{{ oggetto.text }}</span>
                </li> --}}
            </ul>
        </div>
    </main>
@endsection