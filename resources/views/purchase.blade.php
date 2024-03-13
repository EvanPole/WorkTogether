<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkTogether</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/purchase-page.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="nav-bar">
            <p class="title">WorkTogether</p>
            <ul>
                <li><a href="{{ url('') }}"><img src="{{ asset('img/serveur.png') }}">Offres</a></li>
                <li><a href="http://"><img src="{{ asset('img/une-entente.png') }}">Partenaire</a></li>
            </ul>
            <a class="client" href="/login">Espace Client</a>
        </div>
        <form action="/process_payment" method="POST">
            <!-- Informations sur le produit -->
            <div class="product-details">
                <h2>Nom du produit</h2>
                <p>Description du produit et ses caractéristiques.</p>
                <p>Prix: $XX.XX</p>
            </div>

            <!-- Informations de paiement -->
            <div class="payment-details">
                <h2>Informations de paiement</h2>
                <label for="card_number">Numéro de carte:</label>
                <input type="text" id="card_number" name="card_number" required>
                <label for="expiry_date">Date d'expiration:</label>
                <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YY" required>
                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" required>
                <!-- Ajoutez d'autres champs pour les informations de paiement si nécessaire -->
            </div>

            <!-- Bouton de soumission -->
            <button type="submit">Payer</button>
        </form>
</body>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>
