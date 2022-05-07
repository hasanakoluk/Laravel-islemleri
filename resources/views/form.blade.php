<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="{{route('sonuc')}}" method="post">
  @csrf

   <textarea name="metin" \></textarea>
<input type="submit" name="ilet" value="Gönder">

</form>
</body>
</html>
