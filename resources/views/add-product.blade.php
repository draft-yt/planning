<!-- resources/views/add-product.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajouter un produit</title>
    <!-- Assurez-vous d'inclure le CSS de Bootstrap si vous voulez utiliser son style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/addproduct.css') }}">
</head>
<body>
<div class="container mt-4">
    <h1>Ajouter un produit</h1>

    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="image">Logo</label>
            <input type="file" class="form-control-file" id="image" name="image" required onchange="loadFile(event)">
            <label for="image">Ajouter un fichier</label>
            <img id="output" style="width: 200px; height: auto; display: none;"/>
        </div>

        <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // libérer de la mémoire
            }
            output.style.display = 'block';
        };
        </script>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="is_bio" name="is_bio">
            <label class="form-check-label" for="is_bio">Produit Bio</label>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
</body>
</html>
