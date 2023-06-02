:root {
    --primary-color: #8CB561; /* Vert */
    --secondary-color: #F6EFE2; /* Beige */
    --highlight-color: #000000; /* Noir */
    --font-family: 'Roboto', sans-serif;
    --form-spacing: 20px;
}

body {
    font-family: var(--font-family);
    background-color: var(--secondary-color);
    color: var(--primary-color);
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    justify-content: space-between; /* Force le pied de page au bas */
}

h2, h3, h4, h5, h6, ul, p {
    text-align: center;
    color: var(--highlight-color);
    margin-bottom: 24px;
    margin-top: var(--form-spacing);
}

nav ul {
    padding: 0;
}

nav ul li a {
    color: var(--highlight-color);
    text-decoration: none;
    padding: 10px;
    transition: all 0.3s ease;
    box-shadow: none;
}

.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-grow: 1;
    gap: var(--form-spacing); /* Ajoute un espace entre les éléments du formulaire */
}

.container a {
    display: inline-block; /* Permet de centrer les éléments du lien */
    margin-top: var(--form-spacing);
    text-align: center;
}

button, a {
    background-color: var(--primary-color);
    color: var(--highlight-color);
    border: none;
    padding: 10px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
}

button:hover, a:hover {
    background-color: var(--highlight-color);
    color: var(--primary-color);
}

.bike_details {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 2em;
}

.bike_details img {
    max-width: 250px;
    max-height: 300px;
    height: auto;
    flex-shrink: 0;
    order: 1;
}

.bike_details p {
    flex-grow: 1;
    text-align: right;
    order: 2;
}

form {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    gap: var(--form-spacing);
}

form input[type="submit"], form button {
    margin-top: var(--form-spacing);
}

form label, form input[type="date"], form input[type="submit"] {
    display: block;
    margin-bottom: 1em;
}

footer {
    order: 3; /* Force le pied de page au bas */
}
