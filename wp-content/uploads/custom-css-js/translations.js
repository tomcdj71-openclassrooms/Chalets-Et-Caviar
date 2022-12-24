<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
// Create a JS associative array of words to translate
var translate = {
    "Sélectionnez l'agent ci-dessous": "S\xe9lectionnez l'agent ci-dessous",
    "Ce qui doit être affiché dans la boîte d'informations de l'agent": "Ce qui doit \xeatre affich\xe9 dans la bo\xeete d'informations de l'agent",
    "Vous pouvez ajouter une étiquette de bien à afficher sur les vignettes de bien. Exemple: Bonne affaire, Nonuveau, Visite libre, etc.": "Vous pouvez ajouter une \xe9tiquette de bien \xe0 afficher sur les vignettes de bien. Exemple: Bonne affaire, Nonuveau, Visite libre, etc.",
    "Garages ou places de parking": "Garages ou places de parking",
    "Emplacement du bien sur Google Maps": "Emplacement du bien sur Google Maps",
    "ouvrir dans google maps": "ouvrir dans google maps",
    "Suffixe de la superficie": "Suffixe de la superficie",
    "Préfixe de la superficie du terrain": "Pr\xe9fixe de la superficie du terrain",
    "Tous les emplacements de bien": "Tous les emplacements de bien",
    "Tous les types de bien": "Tous les types de bien",
    "Tous les statuts de bien": "Tous les statuts de bien",
    "Tous les utilisateurs": "Tous les utilisateurs",
    "Caractéristiques du bien parent": "Caract\xe9ristiques du bien parent",
    "Statuts du bien parent": "Statuts du bien parent",
    "Types du bien parent": "Types du bien parent",
    "Emplacements du bien parent": "Emplacements du bien parent",
    "Nonn trouvé": "Nonn trouv\xe9",
    "Vignette": "Vignette",
    "Nonmbre total de biens": "Nonmbre total de biens",
    "Biens publiés": "Biens publi\xe9s",
    "Autres biens": "Autres biens",
    "Créé": "Cr\xe9\xe9",
    "Nonuveau bien": "Nonuveau bien",
    "ID du bien": "ID du bien",
    "Format du prix": "Format du prix",
    "Symbole de la devise": "Symbole de la devise",
    "Provide Symbole de la devise. For Exemple: $": "Fournir le symbole de la devise. Exemple: €",
    "Position of Symbole de la devise": "Position du symbole de la devise",
    "Avant les Nonmbres": "Avant les Nonmbres",
    "Après les Nonmbres": "Apr\xe8s les Nonmbres",
    "Texte de prix vide": "Texte de prix vide",
    "Texte à afficher lorsqu'aucun prix n'est fourni. Exemple: Prix Sur demande": "Texte \xe0 afficher lorsqu'aucun prix n'est fourni. Exemple: Prix Sur demande",
    "Enregistrer les modifications": "Enregistrer les modifications",
    "Default Adresse for Nonuveau bien": "Adresse par d\xe9faut pour le Nonuveau bien",
    "Default Map Location for Nonuveau bien (Latitude,Longitude)": "Emplacement par d\xe9faut sur la carte pour le Nonuveau bien (Latitude,Longitude)",
    "Ajouter une case à cocher RGPD dans les formulaires sur le site Web??": "Ajouter une case \xe0 cocher RGPD dans les formulaires sur le site Web?",
    "Ajouter les détails RGPD dans l'email résultant??": "Ajouter les d\xe9tails RGPD dans l'email r\xe9sultant?",
    "RGPD": "RGPD",
    "Rechercher des biens": "Rechercher des biens",
    "Prix au mètre carré": "Prix au m\xe8tre carr\xe9",
    "Prix au mètre carré": "Prix au m\xe8tre carr\xe9",
    "Add Nonuveau bien Features": "Ajouter une Nonuvelle caract\xe9ristique de bien",
    "Add Nonuveau bien Statuses": "Ajouter un Nonuveau statut de bien",
    "Add Nonuveau bien Types": "Ajouter un Nonuveau type de bien",
    "Add Nonuveau bien Locations": "Ajouter un Nonuvel emplacement de bien",
    "Bien parent": "Bien parent",
    "Informations de base": "Informations de base",
    "Texte de l'étiquette du bien": "Texte de l'étiquette du bien",
    "Statuts du bien": "Statuts du bien",
    "Caractéristiques du bien": "Caract\xe9ristiques du bien",
    "Description du bien": "Description du bien",
    "Emplacements du bien": "Emplacements du bien",
    "Image en vedette": "Image en vedette",
    "Attributs du bien": "Attributs du bien",
    "Emplacement du bien": "Emplacement du bien",
    "Adresse du bien": "Adresse du bien",
    "Type de bien": "Type de bien",
    "Sous-type de bien": "Sous-type de bien",
    "Année de construction": "Ann\xe9e de construction",
    "Suffixe de la superficie du terrain": "Suffixe de la superficie du terrain",
    "Prix de vente ou de location": "Prix de vente ou de location",
    "Caractéristiques principales": "Caract\xe9ristiques principales",
    "Caractéristiques supplémentaires": "Caract\xe9ristiques suppl\xe9mentaires",
    "Ancien prix si applicable": "Ancien prix si applicable",
    "Autres caractéristiques": "Autres caract\xe9ristiques",
    "Préfixe du prix": "Pr\xe9fixe du prix",
    "Suffixe du prix": "Suffixe du prix",
    "Chiffres uniquement": "Chiffres uniquement",
    "Suffixe de la superficie": "Suffixe de la superficie",
    "Superficie": "Superficie",
    "Superficie du terrain": "Superficie du terrain",
    "Ajouter plus": "Ajouter plus", 
    "Plans de l'étage": "Plans de l'étage",
    "Ajouter des caractéristiques de l'étage": "Ajouter des caract\xe9ristiques de l'étage",
    "Nonm de l'étage": "Nonm de l'étage",
    "Superficie de l'étage": "Superficie de l'étage",
    "Superficie de l'étage Prefix": "Pr\xe9fixe de la superficie de l'étage",
    "Prix de l'étage": "Prix de l'étage",
    "Plans de l'étage": "Plans de l'étage",
    "Floor Suffixe du prix": "Suffixe du prix de l'étage",
    "ID du bien": "ID du bien",
    "Images de la galerie du bien": "Images de la galerie du bien",
    "Mensuel ou par nuit": "Mensuel ou par nuit",
    "Informations sur l'agent": "Informations sur l'agent",
    "Informations sur l'auteur": "Informations sur l'auteur",
    "Ajouter plusieurs vidéos": "Ajouter plusieurs vid\xe9os",
    "Masquer la boîte d'informations": "Masquer la bo\xeete d'informations",
    "Cela vous aidera à rechercher un bien directement.": "Cela vous aidera \xe0 rechercher un bien directement.",
    "Texte de l'étiquette du bien": "Texte de l'étiquette du bien",
    "Ajouter un média": "Ajouter un m\xe9dia",
    "Tous les biens": "Tous les biens",
    "Paramètres": "Param\xe8tres",
    "Suffixe de la superficie": "Suffixe de la superficie",
    "Formulaires de contact": "Formulaires de contact",
    "Ville": "Ville",
    "Pays": "Pays",
    "Adresse": "Adresse",
    "Département": "Département",
    "Code Postal": "Code Postal",
    "Chambres": "Chambres",
    "Salle De Bains": "Salle De Bains",
    "Chambre": "Chambre",
    "Salle De Bain": "Salle De Bain",
    "Galerie": "Galerie",
    "Titre": "Titre",
    "Exemple": "Exemple",
    "m²": "m²",
    "Aucun": "Aucun",
    "Prix": "Prix",
    "De": "De",
    "Valeur": "Valeur",
    "Superficie": "Superficie",
    "Divers": "Divers",
    "Bien": "Bien",
    "Autres caractéristiques": "Autres caract\xe9ristiques",
    "Oui": "Oui",
    "Non": "Nonn",
};

// if there's a span with class "cre-Prix" then add a space between the Prix and the currency symbol (€) and after the currency symbol
const PrixElements = document.getElementsByClassName('cre-Prix');
for (let i = 0; i < PrixElements.length; i++) {
    const PrixElement = PrixElements[i];
    // Add a space after the currency symbol
    PrixElement.innerHTML = PrixElement.innerHTML.replace(/(€)/g, '$1 ');
}

// Wait for the page to load
window.addEventListener('load', function () {
    for (const [key, Valeur] of Object.entries(translate)) {
        const caseInsensitiveKey = new RegExp(key, 'gi');
        // Find all elements that contain the word. Everything is at least in the body
        const elements = document.evaluate(
            `//*[contains(text(), "${key}")]`,
            document.body,
            null,
            XPathResult.UNonRDERED_NonDE_SNAPSHOT_TYPE,
            null
        );
        // Loop through the elements
        for (let i = 0; i < elements.snapshotLength; i++) {
            const element = elements.snapshotItem(i);
            // element are in the body only
            if (element.closest('body')) {
                // Replace the text
                element.textContent = element.textContent.replace(caseInsensitiveKey, Valeur);
            }            
        }
    }
});

</script>
<!-- end Simple Custom CSS and JS -->
