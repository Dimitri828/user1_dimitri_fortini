<x-layout>
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 ">

                <form action="{{ route('register.store') }}" method="POST" class="form-box">
                    @csrf
                    <div class="mb-3">
                        <h2 class="text-center ">Registrati</h2>
                    </div>
                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome Completo</label>
                        <input type="name" name="name" class="form-control" id="userName">
                    </div>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Non divulgheremo la tua E-mail.</div>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="userPassword">
                    </div>
                    <div class="mb-3">
                        <label for="userConfirmPassword" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="userConfirmPassword">
                    </div>
                    @error('password')
                        <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-custom">Inserisci</button>

                    </div>
                    <div class="mt-3">
                        <p class="d-inline ">Possiedi già un account?</p>
                        <a href="{{ route('login') }}">Accedi!</a>

                    </div>
                </form>

            </div>
        </div>
    </section>

</x-layout>
