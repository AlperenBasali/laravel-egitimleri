<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resim Upload Uygulaması</title>
</head>
<body>

    <form action="{{route('yukle')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <label for="">Resim seçiniz</label> <br>
        <input type="file" name="resim" > <br><br>
        <input type="submit" name="ilet" value="Resim Yükle"><br>
    
    </form>


    
</body>
</html>
