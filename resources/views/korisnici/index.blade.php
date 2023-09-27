<h1>Lista korisnika</h1>
<ol>
    @foreach($korisnici as $korisnik)
        <li>ID: {{$korisnik["id"]}} Ime: {{$korisnik["ime"]}}</li>
        <a href="/korisnik/{{$korisnik['id']}}/uredi">Uredi</a>
        <a href="/korisnik/{{$korisnik['id']}}/obrisi">Obriši</a>
    @endforeach
</ol>