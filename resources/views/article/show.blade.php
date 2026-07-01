<x-layout>
    <section class="container my-5">
        <div class="row">
            <x-show :$article>
            </x-show>
            <div class="col-12 d-flex align-items-end justify-content-center mt-5">
                @auth
                    @if ($article->user->id == Auth::user()->id)
                        <livewire:modal-update :$article></livewire:modal-update>
                    @endif
                @endauth
            </div>
        </div>
    </section>
</x-layout>
