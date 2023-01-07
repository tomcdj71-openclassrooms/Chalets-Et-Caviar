<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
var translate = {
    "Description": "Description",
    "Address": "Adresse",
    "City": "Ville",
    "State": "Département",
    "Country": "Pays",
    "ZIP": "Code Postal",
    "bedroom": "Chambre",
    "bathroom": "Salle de bain",
    "Price": "Prix",
    "Main Detail": "Caractéristiques Principales",
    "Other Detail": "Autres Caractéristiques",
    "Gallery": "Galerie",
    "m2": "m²",
    "open in google map": "Ouvrir dans Google Maps",
    "Bien Superficie du terrain": "Superficie du terrain",
    "Submit": "Envoyer",
    "Learn more": "Lire plus",
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

function updateLoginLink() {
  if (window.location.href.indexOf("Bien-type") > -1) {
    var matches = document.querySelectorAll(".post-layout-matches-wrap a");
    for (var i = 0; i < matches.length; i++) {
      if (matches[i].href.indexOf("Bien-type") > -1) {
          matches[i].remove();
      }
    }
  }

  if (document.getElementById("wpadminbar")) {
    console.log('The element with ID "wpadminbar" exists');
    var loginLink = document.querySelector('ul#menu-navbar a[href*="wp-login"]');
    if (loginLink) {
      console.log('The login link exists');
      loginLink.href = "https://chalets-et-caviar.dew-it.dev/wp-login.php?action=logout";
      loginLink.innerHTML = '<i class="fas fa-sign-out-alt"></i>';
    } else {
      console.log('The login link does not exist');
    }
  } else {
    console.log('The element with ID "wpadminbar" does not exist');
    var loginLink = document.querySelector('ul#menu-navbar a[href*="wp-login"]');
    if (loginLink) {
      console.log('The login link exists');
      loginLink.href = "https://chalets-et-caviar.dew-it.dev/wp-login.php";
      loginLink.innerHTML = '<i class="far fa-user"></i>';
    } else {
      console.log('The login link does not exist');
    }
  }
}
window.addEventListener('load', updateLoginLink);</script>
<!-- end Simple Custom CSS and JS -->
