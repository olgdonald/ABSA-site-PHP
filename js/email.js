function sendMail(formId, event) {
    // Empêcher le rechargement de la page
    if (event) {
        event.preventDefault();
    }

    // Récupérer des informations sur le formulaire soumis
    let formElement = document.querySelector(formId);
    let formType = formElement.getAttribute("data-form-type") || "contact";
    let submitButton = formElement.querySelector("button[type='submit']");

    // Désactiver le bouton pour éviter les clics multiples
    if (submitButton) {
        submitButton.disabled = true;
    }

    // Afficher le popup de chargement
    Swal.fire({
        title: "Envoi en cours...",
        text: "Veuillez patienter pendant l'envoi de votre message.",
        allowOutsideClick: false,
        allowEscapeKey: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    // Définir l'objet du mail selon le type de formulaire
    let formObjet = {
        "donation": "Quelqu'un veut faire un don",
        "volontaire": "Nouveau volontaire",
        "contact": "Nouveau message"
    }[formType];

    // Fonction pour récupérer la valeur d'un élément ou retourner "RAS" s'il n'existe pas
    function getValueOrDefault(id) {
        const element = document.getElementById(id);
        return element ? element.value : "RAS";
    }

    // Préparer les paramètres pour l'email selon le type de formulaire
    let parms = {};

    if (formType === "donation") {
        parms = {
            from_objet: formObjet,
            from_name: getValueOrDefault("donate_nom"),
            from_email: getValueOrDefault("donate_email"),
            from_number: getValueOrDefault("donate_numero"),
            from_plus: getValueOrDefault("donate_montant"),
            message: "Don"
        };
    } else if (formType === "volontaire") {
        parms = {
            from_objet: formObjet,
            from_name: getValueOrDefault("volontaire_nom"),
            from_email: getValueOrDefault("volontaire_email"),
            from_number: getValueOrDefault("volontaire_numero"),
            from_plus: "RAS",
            message: getValueOrDefault("volontaire_message")
        };
    } else if (formType === "contact") {
        parms = {
            from_objet: getValueOrDefault("subject"),
            from_name: getValueOrDefault("name"),
            from_email: getValueOrDefault("email"),
            from_number: getValueOrDefault("numero"),
            from_plus: "RAS",
            message: getValueOrDefault("message")
        };
    }

    // Envoyer l'email via EmailJS
    emailjs.send("service_ujxz31r", "template_e0i8qbn", parms)
        .then(function(response) {
            Swal.fire({
                title: formType === "donation" ? "Vos informations ont bien été transférées !" : "Votre message a bien été envoyé !",
                html: formType === "donation" ? `
                    Vous pouvez faire un don sur les numéros suivants :<br>
                    <strong>Orange Money:</strong> 688994455<br>
                    <strong>MTN Money:</strong> 677559944<br><br>
                    Nous vous contacterons pour confirmer votre don via le numéro que vous avez renseigné.<br><br>
                    <strong>PS :</strong> Si vous avez entré de mauvaises informations, appuyez sur "OKAY" et remplissez à nouveau le formulaire avant d'envoyer votre argent.
                ` : "Nous vous contacterons le plus tôt possible par les informations que vous avez entrées.",
                icon: "success",
                confirmButtonText: "OKAY"
            });

            formElement.reset(); // Réinitialiser le formulaire après envoi
        })
        .catch(function(error) {
            console.error("Erreur lors de l'envoi de l'email:", error);
            Swal.fire({
                title: "Erreur",
                text: "Une erreur est survenue lors de l'envoi du mail. Veuillez réessayer.",
                icon: "error",
                confirmButtonText: "OKAY"
            });
        })
        .finally(() => {
            // Réactiver le bouton après la réponse
            if (submitButton) {
                submitButton.disabled = false;
            }
        });

    return false;
}
