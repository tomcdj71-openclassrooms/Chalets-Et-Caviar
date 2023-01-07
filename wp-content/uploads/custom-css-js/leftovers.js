<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
if (location.pathname.includes('nos-chalets')) {
  const elements = document.querySelectorAll('p:not(:empty)');
  const filteredElements = Array.from(elements).filter(element => element.textContent.includes('Contactez-nous'));
  // if the page is /property-type/nos-chalets
    filteredElements.forEach(element => {
      element.innerHTML = element.innerHTML.replace(/Contactez.*/g, '');
    });
  //https://chalets-et-caviar.dew-it.dev/wp-admin/term.php?taxonomy=property-type&tag_ID=7&post_type=property
  let EditPropertyTypesLink = document.querySelector('a[href*="taxonomy=property-type"]');
  EditPropertyTypesLink.textContent = 'Editer Types de Bien';
} else if (location.pathname.includes('property/')) {
  let EditPropertyLink = document.querySelector('a[href*="action=edit"]'); // select the link
  EditPropertyLink.textContent = 'Editer Ce Bien'; // change the text
}
</script>
<!-- end Simple Custom CSS and JS -->
