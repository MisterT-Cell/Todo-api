# Todo-api
 Dit is een Restful API voor een Todo-applicatie.
 De api is ontwikkeld met Symfony php, Doctrine ORM, PostgreSQL en Api platform (Swagger).

# Benodigdheden
-PHP 8.x
-Symfony
-Composer
-PostgreSQL
-Postman voor het testen

# Installatie
1. 
  zorg dat je symfony download of hebt.
  Download via https://symfony.com/download
  en composer via composer install command in je terminal

2. 
  Clone het project eerst.

  Hierna moet je ervoor zorgen dat je met cd, 
  naar todo-api gaat zodat dit er staat. \Todo-api\todo-api> 

3. 
  Controleer als de php-extensies geactiveerd zijn. genaamd: 
  -extension=zip
  -extension=pdo_pgsql
  -extension=pgsql 

4. 
  Zorg ervoor dat je in het projectmap, ook de volgende commando uitvoert om composer te installeren.
  composer install

5. 
  Om connectie met je database te maken, vraag ik u graag een .env.local te maken in je root, met hier in je wachtwoord zoals volgt: 

  DATABASE_URL="postgresql://postgres:[password]@127.0.0.1:5432/todo_api?serverVersion=17&charset=utf8"

6. 
  Om een automatische database te maken kunnen we nu de volgende commands gebruiken: 
  php bin/console doctrine:database:create
  php bin/console doctrine:migrations:migrate

7. 
  Als alles nu goed is gegaan dan vraag ik u de server te starten met:
  symfony serve in uw terminal

## Testen met Postman
  Om dit project te testen, zou u gebruik moeten maken van Postman. 

  GET http://localhost:8000/api/todos/{id} zorgt ervoor dat je 1 specifieke todo ophaalt 

  GET http://localhost:8000/api/todos zorgt ervoor dat je alle todos ophaalt

  POST http://localhost:8000/api/todos werkt pas als je 
  {
  "title": "Placeholder",
  "description": "Placeholder",
  "finished": false
  } de "Placeholder" aanpast naar de gewenste titel en omschrijving van u Todo.
  
  PUT/Patch http://localhost:8000/api/todos/{id} werkt pas als je een bepaalde Todo wilt aanpassen denk hierbij aan de title, description of status.

  DELETE http://localhost:8000/api/todos/{id} werkt als je een bepaalde todo wilt verwijderen.

## Swagger 
  Om de endpoints goed te zien kan je de swagger_docs.json importeren in Postman of de volgende commandos uit tevoeren zodat je de ui kan gebruiken:
  
  composer require symfony/twig-bundle
  composer require symfony/asset
  php bin/console assets:install public --symlink

  als dit is goed gegaan kan je de ui hier vinden http://localhost:8000/api/docs