<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İletişim Formu</title>
</head>
<body>

    @if($errors->any())
    @foreach($errors->all() as $hatalar )

    {{$hatalar}} <br>
    @endforeach
    @endif

    <form action="{{ route('uyekayit') }}" method="post">
        @csrf
        <label for="">Ad-Soyad</label><br>
        <input type="text" name="adsoyad"><br>

        <label for="">Telefon</label><br>
        <input type="text" name="telefon"><br>

        <label for="">E-mail</label><br>
        <input type="text" name="mail"><br>

     
        <input type="submit" name="ilet" value="Gönder">
    </form>

    
</body>
</html>
