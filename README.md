# Easysante

<h1>Application web e.commerce</h1>

<h2>Outils</h2>
<ul>
  <li>Framework php : symfony</li>
  <li>Framework html5 - css - jquery : materialize</li>
 </ul>

<h2>Mon initialisation du projet</h2>
<ol>
<li>Install git composer npm symfony</li>
<li>Init project : symfony new --full easysante</li>
composer create-project symfony/skeleton mydir
<li>Création du controller : <code>php bin/console make:controller DefaultController</code></li>
<li><code>npm install uglify-js --prefix src/Resources</code></li>
<li>Installation jquery : <code>npm install jquery --prefix src/Resources</code></li>
<li>Installation materialize css + js : <code>npm install materialize-css --prefix src/Resources</code></li>
yarn add bootstrap --dev
<li>Copie des dossier css et js dans le repertoire public</li>
</ol>

<h2>Travailler en locale sur ma machine</h2>
<ul>
<li>Uploader votre code à jour sur le serveur de production <code>git clone https://github.com/kylliox63/easysante.git</code></li>
<li>Mettre à jour vos dépendances via Composer <code>composer install --no-scripts --optimize-autoloader</code></li>
<li>Mettre à jour votre base de données <code></code></li>
<li>Vider le cache <code>php bin/console cache:clear<br />php bin/console cache:clear --env=prod</code></li>
</ul>

<p>Start project : <code>export APP_ENV=prod && symfony server:start --no-tls</code></p>
