# Easysante

<h1>Application web e.commerce</h1>

<h2>Outils</h2>
<ul>
  <li>Framework php : symfony</li>
  <li>Framework html5 - css - jquery : materialize</li>
 </ul>

<h2>Mon initialisation du projet</h2>
<ul>
<li>Install git composer symfony</li>
<li>Init project : symfony new --full easysante</li>
<li>Création du controller : <code>php bin/console make:controller DefaultController</code></li>
</ul>

<h2>Travailler en locale sur ma machine</h2>
<ul>
<li>Uploader votre code à jour sur le serveur de production <code>git clone https://github.com/kylliox63/easysante.git</code></li>
<li>Mettre à jour vos dépendances via Composer <code>composer install --no-scripts --optimize-autoloader</code></li>
<li>Mettre à jour votre base de données <code></code></li>
<li>Vider le cache <code>php bin/console cache:clear<br />php bin/console cache:clear --env=prod</code></li>
</ul>

<p>Start project : symfony server:start</p>

