<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<div style="width: 100vw; display: flex; align-content: center; justify-content: center;margin-top: 10vh;">
    <div style="text-align: center">
        <h2>
            Bonjour {{$myPrize->user->name}},
        </h2>
        <p>
            Vous avez gagné le lot suivant :<br>
            <b>{{$myPrize->prize->name}}</b>
        </p>
    </div>
</div>

</html>
