<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
// Array of classes
// Create a JS associative array of words to translate
var translate = {
    "Description": "Description",
    "Address": "Adresse",
    "City": "Ville",
    "State": "Département",
    "Country": "Pays",
    "Zip": "Code Postal",
    "bedroom": "Chambre",
    "bathroom": "Salle de bain",
    "Price": "Prix",
    "Main Detail": "Caractéristiques Principales",
    "Others Detail": "Autres Caractéristiques",
    "Gallery": "Galerie",
    "m2": "m²",
    "open in google map": "Ouvrir dans Google Maps",
    "Property Lot Size": "Superficie du terrain",
    "Submit": "Envoyer",
    "Learn more": "Lire plus",
};

// if there's a span with class "cre-Price" then add a space between the Prix and the currency symbol (€) and after the currency symbol
const priceElements = document.getElementsByClassName('cre-price');
for (let i = 0; i < priceElements.length; i++) {
    const priceElement = priceElements[i];
    // Add a space after the currency symbol
    priceElement.innerHTML = priceElements.innerHTML.replace(/(€)/g, '$1 ');
}
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

if (window.location.href.indexOf("property-type") > -1) {
    var matches = document.querySelectorAll(".post-layout-matches-wrap a");
    for (var i = 0; i < matches.length; i++) {
        if (matches[i].href.indexOf("property-type") > -1) {
            matches[i].remove();
        }
    }
}
</script>
<!-- end Simple Custom CSS and JS -->
