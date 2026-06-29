@foreach ($articles as $article)
    <div class="col-12 col-md-3 my-3" >
        <div class="card"  style="width: 18rem;">
            <img src="https://picsum.photos/{{200+$article->id}}" class="card-img-top" alt="immagine placeholder">
            <div class="card-body">
                <h5 class="card-title">{{$article->name}}</h5>
                <p class="card-text">{{$article->description}}</p>
                <p class="card-text fw-bold ">{{$article->price}}€</p>
                <p class="card-text">{{ucwords(strtolower($article->user->name))}} </p>
                <a href="{{route("article.category",$article->category_id)}}" class="badge text-bg-primary">{{$article->category->name}}</a>
                <a href="{{route("article.show",compact("article"))}}" class="btn btn-primary d-block my-3">Dettaglio</a>
            </div>
        </div>
    </div>
@endforeach
