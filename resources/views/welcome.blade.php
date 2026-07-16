<x-layout>
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show text-center my-0" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <header></header>
    <h2 class="text-center my-3 text-dark">Angolo delle Occasioni</h2>
    <x-swiper :$articles></x-swiper>
</x-layout>


