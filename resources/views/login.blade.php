<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div style="width: 100vw; display: flex; align-content: center; justify-content: center;margin-top: 10vh;">
    <form action="{{route('user-authenticate')}}" method="POST"
          style="display:flex; flex-direction: column; gap: 1em;width: 50vw">
        @csrf
        <h1>
            Login
        </h1>
        <div>

            <label for="email">Adresse email</label>
            <input id="email"
                   type="email"
                   name="email"
            >
            @error('email')
            <div class="alert alert-danger" style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <div>

            <label for="password">Mot de passe</label>
            <input id="password"
                   type="password"
                   name="password"
            >
            @error('password')
            <div class="alert alert-danger" style="color: red">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Se connecter</button>
    </form>
</div>
</html>
