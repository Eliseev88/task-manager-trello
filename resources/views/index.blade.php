@extends('layouts.app')

@section('content')
    <x-header />
    <div class="container text-white">
        <div class="margin__content align-items-center d-flex flex-wrap justify-content-center">
            <div class="width__content-left">
                <div>
                    <h1 class="font-montserrat-subrayada font-size__content mb-2">KANBAN</h1>
                    <p class="font-montserrat font-size__paragraph margin__bott mr-3">Идеальное пространство для самых разных задач. Место для тех кто любит планировать свое время</p>
                    <a href="board" class="font-montserrat font-size__paragraph content-link margin__bott">Начните прямо сейчас</a>
                </div>
            </div>
            <div class="text-center width__content-right">
                <img src="storage/index_page/13.png" class="img-fluid" width="80%">
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endpush

