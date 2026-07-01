<x-layout>
    <section class="container my-5">
        <div class="row">
            <x-show :$article></x-show>
            <div class="col-12 d-flex justify-content-center my-5 gap-5">
                <form action="{{ route('review.accept', compact('article')) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="btn btn-custom">Accetta</button>
                </form>
                <form action="{{ route('review.reject', compact('article')) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="btn btn-danger">Rifiuta</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>
