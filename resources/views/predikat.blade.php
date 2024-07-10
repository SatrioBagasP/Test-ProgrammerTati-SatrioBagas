<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/predikat" method="post">
        @csrf
        <label for="perilaku">Inputkan Perilaku Staff</label>
        <select name="perilaku" id="perilaku">
            <option selected disabled>Pilih Salah Satu</option>
            <option value="a">Dibawah Ekspetasi</option>
            <option value="b">Sesuai Ekspetasi</option>
            <option value="c">Diatas Ekspetasi</option>
        </select>
        <br>
        <br>
        <label for="hasil_kerja">Inputkan Hasil Kerja Staff</label>
        <select name="hasil_kerja" id="hasil_kerja">
            <option selected disabled>Pilih Salah Satu</option>
            <option value="1">Dibawah Ekspetasi</option>
            <option value="2">Sesuai Ekspetasi</option>
            <option value="3">Diatas Ekspetasi</option>
        </select>
        <br>
        <br>
        <button type="submit">
            Enter
        </button>
        <br>
        <br>
        @if(isset($hasil))
        Hasil : {{$hasil}}
        @endif

    </form>
</body>
</html>
