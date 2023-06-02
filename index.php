<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form action="form.php" method="post" enctype="multipart/form-data">
        <div  class="forms form-group">
            <label  for="name"> Ime: </label>
            <input  required  class="form-control" type="text" id="name" name="name">
        </div>
        <div class="forms form-group">
            <label  for="price"> Cena: </label>
            <input required  type="number" class="form-control" step="0.01 id="price" name="price">
        </div>
        <div class="forms form-group">
            <label  for="description"> Opis: </label>
            <textarea required  id="description" class="form-control" name="description" rows="3"></textarea>
        </div>

        <div class="forms form-group">
            <label for="storage"> Kolicina: </label>
            <input required type="number" class="form-control" id="storage" name="storage">
        </div>
            <label for="slika">Slika</label>
            <input  type="file" name = "slika"  class="form-control"  id="slika">
        <button type="submit" class="btn btn-success" >Dodaj</button>

    </form>

</body>

</html>