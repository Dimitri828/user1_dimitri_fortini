<section class="container my-5">
    <x-message />


    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form wire:submit="store" class="form-box">
                <div class="mb-5">
                    <h2 class="text-center">Inserisci Nuovo Annuncio</h2>
                </div>

                <div class="mb-3">
                    <label for="articleName" class="form-label">Nome Articolo</label>
                    <input wire:model="name" type="text" class="form-control" id="articleName">
                    <div class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="articleDescription" class="form-label">Descrizione Articolo</label>
                    <textarea wire:model="description" class="form-control" id="articleDescription" cols="30" rows="10"></textarea>
                    <div class="text-danger">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="articlePrice" class="form-label">Prezzo Articolo</label>
                    <div class="input-group">
                        <input wire:model="price" type="number" class="form-control" id="articlePrice">
                        <span class="input-group-text">€</span>
                    </div>
                    <div class="text-danger">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <p>Categorie</p>
                    <div class="text-danger">
                        @error('categories')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3 d-flex flex-wrap gap-4">
                    @foreach ($categories as $category)
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" wire:model="category_id"
                                value="{{ $category->id }}">

                            <label class="form-check-label">
                                {{ $category->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="text-danger">
                        @error('category_id')
                            {{ $message }}
                        @enderror
                    </div>
                <button type="submit" class="btn btn-primary">Inserisci</button>
            </form>

        </div>
    </div>
</section>
