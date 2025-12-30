const erstwahl = document.querySelectorAll('.wahl_eingabe');

// Ein Array, um die ausgewählte Option zu speichern
let selectedOption = null;

// Eine Schleife, um alle Choice-Buttons durchzugehen und einen Event-Listener hinzuzufügen
erstwahl.forEach(button => {
  button.addEventListener('click', () => {
	// Wenn der Button bereits ausgewählt ist, wird die Auswahl aufgehoben
	if (button.classList.contains('selected')) {
	  button.classList.remove('selected');
	  selectedOption = null;
	  
	} else {
	  // Wenn der Button noch nicht ausgewählt ist, wird die Auswahl geändert
	  erstwahl.forEach(otherButton => {
		otherButton.classList.remove('selected');
	  });
	  button.classList.add('selected');
	  selectedOption = button.value;
	  
	}
	
	// Der Bestätigen-Button wird aktiviert/deaktiviert, je nachdem, ob eine Auswahl getroffen wurde
	document.getElementById('bestätigungs_button').disabled = selectedOption === null;
  });
});

// Der Event-Listener für den Bestätigen-Button
document.getElementById('bestätigungs_button').addEventListener('click', () => {
  alert(`Gewählte Partei: ${selectedOption}`);
  var zweitstimme = selectedOption;

  module.exports = zweitstimme;
}); 