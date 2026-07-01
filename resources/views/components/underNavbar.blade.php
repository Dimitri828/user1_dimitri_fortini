<div class="container-fluid">
    <div class="row">
        <div class="under-navbar col-12 d-flex flex-wrap gap-2 justify-content-evenly align-items-center ">
            @foreach ($categories as $category )
                <a class="text-decoration-none font-wh " href="{{route("article.category",compact("category"))}}">{{$category->name}}</a>
            @endforeach
        </div>
    </div>
</div>
