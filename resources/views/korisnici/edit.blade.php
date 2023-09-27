<h1>Uredi korisnika</h1>
<p>Mjenjamo podatke za korisnika {{$korisnik["ime"]}}</p>
<form action="" method="POST">
    @csrf
    @method("PUT")
    <label>Ime: </label>
    <input type="text" name="ime" value="{{$korisnik['ime']}}">
    <button type="submit">Ažuriraj</button>

</form>