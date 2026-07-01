<x-layout>
    <section class="container-fluid my-5 ">
        <div class="row ">
            @foreach ($articles as $article)
                <x-card :$article></x-card>
            @endforeach

        </div>
    </section>
</x-layout>
