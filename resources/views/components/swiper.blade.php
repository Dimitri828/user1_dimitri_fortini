<div class="swiper mySwiper my-5 form-box">
    <div class="swiper-wrapper ">

        @foreach ($articles->take(6) as $article)
            <div class="swiper-slide ">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/{{ 200 + $article->id }}" class="card-img-top "
                        alt="immagine placeholder">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text">{{ $article->description }}</p>
                        <p class="card-text fw-bold ">{{ $article->price }}€</p>
                        <p class="card-text">{{ ucwords(strtolower($article->user->name)) }} </p>
                        <a href="{{ route('article.category', $article->category_id) }}"
                            class="badge text-bg-primary">{{ $article->category->name }}</a>
                        <a href="{{ route('article.show', compact('article')) }}"
                            class="btn btn-custom d-block my-3">Dettaglio</a>

                    </div>
                </div>
            </div>
        @endforeach



    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
