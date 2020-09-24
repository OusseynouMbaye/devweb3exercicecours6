<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice cours6</title>
</head>

<body>
    <h1>Exercice</h1>

    <form action="/connexion.php" method="post">
        <div class="row">
            <div class="col col-12 col-md-6">
                <div class="form-group">
                    <label for="user">Votre compte</label>
                    <input class="form-control" id="user" name="user" pattern="^[a-zA-Z]{8,10}$" placeholder="Votre compte" required>
                    <div class="invalid-feedback">
                        Le compte est requis.
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input class="form-control" id="password" name="password" placeholder="Votre mot de passe" required>
                    <div class="invalid-feedback">
                        Le mot de passe est requis.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Me connecter</button>
    </form>
</body>

</html>