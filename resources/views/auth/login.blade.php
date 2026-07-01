<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form class="form-box" action="{{ route('login.store') }}" method="POST" class="d-flex gap-1">
                    <div class="mb-3">
                        <h2 class="text-center">Login</h2>
                    </div>
                    @csrf
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Inserisci la e-mail" class="form-control">
                    </div>
                    @error('email')
                        <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Inserisci la password" class="form-control">
                    </div>
                    @error('password')
                        <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center mt-5">
                        <button class="btn btn-custom mb3" type="submit">Login</button>
                    </div>
                    <div class="mt-3">
                        <p class="d-inline ">Non sei ancora registrato?</p>
                        <a href="{{ route('register') }}">Registrati!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>




