<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Modifica Annuncio
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    {{-- FORM --}}
                    <form wire:submit="update" class="form-box">
                        <div class="mb-5">
                            <h2 class="text-center">Modifica Annuncio</h2>
                        </div>

                        <div class="mb-3">
                            <label for="articleName" class="form-label">Nome Articolo</label>
                            <input wire:model="name" type="text" class="form-control" id="articleName"
                                value="{{ $article->name }}">
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
                                        @checked($category->id) value="{{ $category->id }}">

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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-primary">Modifica</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
