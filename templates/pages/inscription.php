<?php 
require_once __DIR__ . '/../header.php'; 
?>

<main class="login-page">
    <section class="form-container">
        <div class="form-left">
            <h1>Inscription</h1>

            <form action="/inscription" method="post" class="form">
                <label for="pseudo">Pseudo</label>
                <input type="text" id="pseudo" name="pseudo" required>

                <label for="email">Adresse email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn-submit">S’inscrire</button>
            </form>

            <p class="redirect">Déjà inscrit ? <a href="?page=login">Connectez-vous</a></p>
        </div>

        <div class="form-right">
            <img src="/P4/tomtroc/public/images/photologin.PNG" alt="Livres empilés">
        </div>
    </section>
</main>

<?php 
require_once __DIR__ . '/../footer.php'; 
?>
