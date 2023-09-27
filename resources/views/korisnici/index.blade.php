<h1>Lista korisnika</h1>
<ol>
    @foreach($korisnici as $korisnik)
        <li>ID: {{$korisnik["id"]}} Ime: {{$korisnik["ime"]}}</li>
    @endforeach
</ol>