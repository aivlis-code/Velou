document.addEventListener('DOMContentLoaded', function() {
    var bikeContainer = document.getElementById('bikeContainer');
    var loadMoreButton = document.getElementById('loadMore');

    function loadBikes() {
        for (var i = 0; i < 12; i++) {
            var bike = document.createElement('div');
            bike.className = 'bike';

            var img = document.createElement('img');
            img.src = 'velofa.avif';

            var title = document.createElement('h2');
            title.textContent = 'Vélo de ville'; 

            var description = document.createElement('p');
            description.textContent = 'Ce vélo électrique tout équipé (porte-bagages, garde-boue, éclairage intégré, etc) est conçu pour les déplacements courts en ville. Avec ce vélo à assistance électrique (VAE), dotez vous d\'une aide pour rejoindre plus facilement votre destination, sans transpirer excessivement tout en maîtrisant parfaitement votre temps ! Et seulement pour 55€/mois'; // Nouvelle description du vélo

            var button = document.createElement('button');
            button.textContent = 'Réserver';

            bike.appendChild(img);
            bike.appendChild(title);
            bike.appendChild(description);
            bike.appendChild(button);

            bikeContainer.appendChild(bike);
        }
    }

    loadMoreButton.addEventListener('click', loadBikes);

    // Charge les 12 premiers vélos lorsque la page est chargée
    loadBikes();
});
