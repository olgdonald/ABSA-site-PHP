// Fausse base de données des donateurs
const donateurs = [
    {
        nom: "Jean Dupont",
        photo: "../img/post-1.jpg",
        montant: "10 000 FCFA"
    },
    {
        nom: "Marie Dubois",
        photo: "../img/event-2.jpg",
        montant: "25 000 FCFA"
    },
    {
        nom: "Paul Martin",
        photo: "../img/event-1.jpg",
        montant: "15 000 FCFA"
    }
    // Ajoutez autant de donateurs que nécessaire
];

let currentIndex = 0;

function afficherDonateur() {
    const donateur = donateurs[currentIndex];
    const container = document.getElementById("donateur-container");

    // Appliquer l'effet de transition
    container.style.opacity = 0;

    setTimeout(() => {
        document.getElementById("donateur-photo").src = donateur.photo;
        document.getElementById("donateur-nom").textContent = donateur.nom;
        document.getElementById("donateur-montant").textContent = "Montant: " + donateur.montant;

        // Réappliquer l'effet de transition après la mise à jour des données
        container.style.opacity = 1;

        currentIndex = (currentIndex + 1) % donateurs.length;
    }, 1000); // Délai pour la transition de disparition
}

// Affiche un nouveau donateur toutes les 10 secondes avec une transition fluide
setInterval(afficherDonateur, 10000);

// Afficher le premier donateur immédiatement
afficherDonateur();
