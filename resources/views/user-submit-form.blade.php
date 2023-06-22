<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div style="width: 100vw; display: flex; align-content: center; justify-content: center;margin-top: 10vh;">
    <form action="{{route('user-register')}}" method="POST"
          style="display:flex; flex-direction: column; gap: 1em;width: 50vw">
        @csrf
        <h1>
            Register
        </h1>
        <div>
            <label for="email">Nom</label>
            <input id="name"
                   name="name"
                   type="text"
                   class="@error('name') is-invalid @enderror">
            @error('name')
            <div class="alert alert-danger" style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Adresse email</label>
            <input id="email"
                   name="email"
                   type="email"
            >
            @error('email')
            <div class="alert alert-danger" style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input id="password"
                   name="password"
                   type="password"
            >
            @error('name')
            <div class="alert alert-danger" style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit"> s'inscrire</button>
    </form>

</div>
</html>
