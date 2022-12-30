<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
// Create a JS associative array of words to translate
var translate = {
    "Select the agent below": "S\xe9lectionnez l'agent ci-dessous",
    "What to display in agent information box": "Ce qui doit \xeatre affich\xe9 dans la bo\xeete d'informations de l'agent",
    "You can add a property label to display on property thumbnails. Example: Hot Deal": "Vous pouvez ajouter une \xe9tiquette de bien \xe0 afficher sur les vignettes de bien. Exemple: Bonne affaire, Nouveau, Visite libre, etc.",
    "Garages or Parking Spaces": "Garages ou places de parking",
    "Property Location at Google Map": "Emplacement du bien sur Google Maps",
    "Enable Auto-Generated Property ID": "Activer l'auto-génération de l'ID du bien",
    "Auto-Generated Property ID Pattern": "Modèle d'auto-génération de l'ID du bien",
    "please use {ID} in your pattern as it will be replaced by the Property ID.": "Veuillez utiliser {ID} dans votre modèle car il sera remplacé par l'ID du bien.",
    "Area Size Postfix": "Suffixe de la superficie",
    "Lot Size Prefix": "Pr\xe9fixe de la superficie du terrain",
    "All Property Locations": "Tous les emplacements de bien",
    "All Property Types": "Tous les types de bien",
    "All Property Statuses": "Tous les statuts de bien",
    "All Users": "Tous les utilisateurs",
    "Parent Property Features": "Caract\xe9ristiques du bien parent",
    "Parent Property Statuses": "Statuts du bien parent",
    "Parent Property Types": "Types du bien parent",
    "Parent Property Locations": "Emplacements du bien parent",
    "Not Found": "Non trouv\xe9",
    "Thumbnail": "Vignette",
    "Total Properties": "Nombre total de biens",
    "Published Properties": "Biens publi\xe9s",
    "Other Properties": "Autres biens",
    "Created": "Cr\xe9\xe9",
    "New Property": "Nouveau bien",
    "Property ID": "ID du bien",
    "Price Format": "Format du prix",
    "Currency Sign": "Symbole de la devise",
    "Provide currency sign. For Example: $": "Fournir le symbole de la devise. Exemple: €",
    "Position of Currency Sign": "Position du symbole de la devise",
    "Before the numbers": "Avant les nombres",
    "After the numbers": "Apr\xe8s les nombres",
    "Empty price text": "Texte de prix vide",
    "Text to display when no price is provided": "Texte \xe0 afficher lorsqu'aucun prix n'est fourni. Exemple: Prix Sur demande",
    "Save Changes": "Enregistrer les modifications",
    "Default Address for New Property": "Adresse par d\xe9faut pour le nouveau bien",
    "Default Map Location for New Property (Latitude,Longitude)": "Emplacement par d\xe9faut sur la carte pour le nouveau bien (Latitude,Longitude)",
    "Add GDPR agreement checkbox in forms across website?": "Ajouter une case \xe0 cocher RGPD dans les formulaires sur le site Web",
    "Add GDPR detail in resulting email?": "Ajouter les d\xe9tails RGPD dans l'email r\xe9sultant",
    "GDPR": "RGPD",
    "Search Properties": "Rechercher des biens",
    "Add New Property Features": "Ajouter une nouvelle caract\xe9ristique de bien",
    "Add New Property Statuses": "Ajouter un nouveau statut de bien",
    "Add New Property Types": "Ajouter un nouveau type de bien",
    "Add New Property Locations": "Ajouter un nouvel emplacement de bien",
    "Parent Property": "Bien parent",
    "Property Title": "Nom du bien",
    "Basic Information": "Informations de base",
    "Property Label Text": "Texte de l'étiquette du bien",
    "Property Statuses": "Statuts du bien",
    "Property Features": "Caract\xe9ristiques du bien",
    "Property Description": "Description du bien",
    "Property Locations": "Emplacements du bien",
    "Featured Image": "Image en vedette",
    "Property Attributes": "Attributs du bien",
    "Property Location": "Emplacement du bien",
    "Property Address": "Adresse du bien",
    "Property Type": "Type de bien",
    "Property Subtype": "Sous-type de bien",
    "Year Built": "Ann\xe9e de construction",
    "Lot Size Postfix": "Suffixe de la superficie du terrain",
    "Sale or Rent Price": "Prix de vente ou de location",
    "Main Detail": "Caract\xe9ristiques principales",
    "Additional Details": "Caract\xe9ristiques suppl\xe9mentaires",
    "Old Price If Any": "Ancien prix si applicable",
    "Other Details": "Autres caract\xe9ristiques",
    "Price Prefix": "Pr\xe9fixe du prix",
    "Price Postfix": "Suffixe du prix",
    "Only digits": "Chiffres uniquement",
    "Area Size Postfix": "Suffixe de la superficie",
    "Area Size": "Superficie du bien",
    "Lot Size": "Superficie du terrain",
    "Add more": "Ajouter plus", 
    "Floor plans": "Plans de l'étage",
    "Add Floor Details": "Ajouter des caract\xe9ristiques de l'étage",
    "Floor Name": "Nom de l'étage",
    "Floor Size": "Superficie de l'étage",
    "Floor Size Prefix": "Pr\xe9fixe de la superficie de l'étage",
    "Floor Price": "Prix de l'étage",
    "Floor Plans": "Plans de l'étage",
    "Floor Price Postfix": "Suffixe du prix de l'étage",
    "Property ID": "ID du bien",
    "Property Gallery Images": "Images de la galerie du bien",
    "Monthly or Per Night": "Mensuel ou par nuit",
    "Agent Information": "Informations sur l'agent",
    "Author information": "Informations sur l'auteur",
    "Add Multiple Videos": "Ajouter plusieurs vid\xe9os",
    "Hide information box": "Masquer la bo\xeete d'informations",
    "It will help you search a property directly.": "Cela vous aidera \xe0 rechercher un bien directement.",
    "Property Label Text": "Texte de l'étiquette du bien",
    "Add Media": "Ajouter un m\xe9dia",
    "All Properties": "Tous les biens",
    "Settings": "Param\xe8tres",
    "Size Postfix": "Suffixe de la superficie",
    "Contact Forms": "Formulaires de contact",
    "City": "Ville",
    "Country": "Pays",
    "Address": "Adresse",
    "State": "Département",
    "Zip": "Code Postal",
    "Bedrooms": "Chambres",
    "Bathrooms": "Salle De Bains",
    "Gallery": "Galerie",
    "Title": "Titre",
    "Example": "Exemple",
    "sq ft": "m²",
    "None": "Aucun",
    "Price": "Prix",
    "From": "A partir de",
    "Value": "Valeur",
    "Area": "Superficie",
    "Misc": "Divers",
    "Property": "Bien",
    "Others Detail": "Autres caract\xe9ristiques",
    "Location": "Emplacement",
    "Add New": "Ajouter nouveau",
    "Status": "Statut",
    "Publish Time": "Date de publication",
    "Enable": "Activer",
    "Disable": "Désactiver",
    "save changes": "Enregistrer les modifications",
};

// Wait for the page to load
window.addEventListener('load', function () {
    for (const [key, value] of Object.entries(translate)) {
        const caseInsensitiveKey = new RegExp(key, 'gi');
        // Find all elements that contain the word. Everything is at least in the body
        const elements = document.evaluate(
            `//*[contains(text(), "${key}")]`,
            document.body,
            null,
            XPathResult.UNORDERED_NODE_SNAPSHOT_TYPE,
            null
        );
        // Loop through the elements
        for (let i = 0; i < elements.snapshotLength; i++) {
            const element = elements.snapshotItem(i);
            // element are in the body only
            if (element.closest('body')) {
                // Replace the text
                element.textContent = element.textContent.replace(caseInsensitiveKey, value);
            }            
        }
    }
});

</script>
<!-- end Simple Custom CSS and JS -->
