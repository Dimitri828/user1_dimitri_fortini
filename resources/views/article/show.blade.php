<x-layout>
    <section class="container my-5
    ">
        <div class="row">
            <div class="col-12 col-md-6">
                <x-carousel :$article></x-carousel>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="form-box text-center">Scheda prodotto</h2>
                <ul class="d-flex align-items-center flex-column justify-content-center mt-5">
                    <li class="h5 mb-3 mt-5">NOME ARTICOLO: {{$article->name}}</li>
                <li class="h5 mb-3">DESCRIZIONE ARTICOLO: {{$article->description}}</li>
                <li class="h5 mb-3 ">CATEGORIA: <a href="{{route("article.category",$article->category_id)}}" class="btn btn-primary">{{$article->category->name}}</a> </li>
                <li class="h5 mb-3">VENDUTO DA: {{ucwords(strtolower($article->user->name))}}</li>
    
                </ul>
                <p class="h4 text-center fw-bold mt-5">PREZZO: {{$article->price}} €</p>
                @auth
                @if ($article->user->id == Auth::user()->id)
                    <livewire:modal-update 
                    :$article
                    ></livewire:modal-update>
                @endif
                    
                @endauth
                
            </div>
        </div>
    </section>
    
</x-layout>