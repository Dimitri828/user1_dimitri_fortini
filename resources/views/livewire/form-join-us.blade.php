    <section class="container my-5">
        <div class="row justify-content-center">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="col-12 col-md-6">
                <form class="form-box " wire:submit="submitApplication">
                    <div class="mb-3">
                        <h2 class="text-center">Lavora con Noi</h2>
                    </div>
                    <div class="mb-3">
                        <label for="joinUsMail" class="form-label">Email</label>
                        <div class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <input wire:model="email" type="email" class="form-control" id="joinUsMail"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non divulgheremo la tua email con nessuno.</div>
                    </div>
                    <div class="mb-3">
                        <p>Conoscenza della lingua inglese</p>
                    </div>
                    <div class="mb-3 d-flex flex-wrap  align-items-baseline">
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishA1" value="A1">
                        <label for="englishA1" class="form-check-label">A1</label>
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishA2" value="A2">
                        <label for="englishA2" class="form-check-label">A2</label>
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishB1" value="B1">
                        <label for="englishB1" class="form-check-label">B1</label>
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishB2" value="B2">
                        <label for="englishB2" class="form-check-label">B2</label>
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishC1" value="C1">
                        <label for="englishC1" class="form-check-label">C1</label>
                        <input wire:model="english_level" type="radio" class="ms-3 me-1 form-check-input"
                            name="englishLevel" id="englishC2" value="C2">
                        <label for="englishC2" class="form-check-label">C2</label>
                        <div class="text-danger">
                            @error('english_level')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="mb-3">
                        <p>Esperienze pregresse come revisore</p>
                        <select wire:model="experience" id="experience" class="form-select">
                            <option value="none">Nessuna</option>
                            <option value="basic">Base(-1 Anno) </option>
                            <option value="intermediate">Moderata(1-3 Anni)</option>
                            <option value="advanced">Esperto(+3 Anni) </option>
                        </select>
                        <div class="text-danger">
                            @error('experience')
                                {{ $message }}
                            @enderror
                        </div>

                    </div>
                    <div class="mt-3 d-flex justify-content-center ">
                        <button type="submit" class="btn btn-custom">Invia Candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
