# FizzBuzz TDD

Opdracht MD, Grafisch Lyceum Utrecht

Joost van Veen<br>
Accent Interactive BV<br>
www.accentinteractive.nl

# Inhoud workshop

1. Waarom testen?
2. Wat zijn acceptance tests, functional tests, unit tests?
3. Wat is TDD?
4. Wat gaan we bouwen?
    * Wat is FizzBuzz?
    * Definieer de features
5. Acceptance test voor de homepage.
6. Unit test voor FizzBuzz class (happy path)
7. Refactor homepage
8. Refactor FizzBuzz class
9. Zelf doen: 
    * voeg met TDD nieuwe feature toe aan FizzBuzz class 
    * maak test sad path
    * Refactor met TDD de homepage door gebruik te maken van SESSION ipv POST 

## Voorbereiding

* Plaats de inhoud van de repo in je folder met PHP projecten. Dit kan door de git repository te clonen of te doqwnlaoden van Github.
* Zorg dat je lokaal toegang hebt tot een commandline tool. Voor Mac is dat gewoon de terminal. Voor Windows kan dat bijvoorbeeld Cygwin zijn.
* Zorg dat je Phpunit lokaal hebt geïnstalleerd zodat je het kunt uitvoeren vanaf de commandline. Zie https://phpunit.de/manual/current/en/installation.html
* Zorg dat je Codeception lokaal hebt geïnstalleerd zodat je het kunt uitvoeren vanaf de commandline. Zie http://codeception.com/install

# Project structuur

* /App - hier komt de domain logic van je applicatie
* /public - de webroot van je applicatie
* /tests - de tests voor je applicatie
* /phpunit.xml - Phpunit configuratie
* /phpunitbootstrap.php - PHP bootstrap file voor je unit tests

## Type tests:
* Acceptance: test van live pagina met browser interactie.
* Functional: live pagina testen, maar zonder browser (bijvoorbeeld voor Api endpoint tests).
* Unit: losse unit code testen, bijvoobeeld een method in een class.

# Codeception

Met Codeception kun je alledrie de soorten testen maken en uitvoeren. We gebruiken Codeception in dit project alleen voor acceptance tests.

* Als je Codeception niet hebt geinstalleerd gebruik dan `codecept.phar` in dit project:
```
php codecept.phar YOURCOMMAND
```
* Codeception initialiseren (dit stelt Codeception in voor je huidige project):
```
codecept bootstrap
```
* Pas de url naar je webapplicatie aan in `tests/acceptance.suite.yml`
* Nieuwe acceptance test maken:
```
codecept generate:cest acceptance Fizzbuzz
```
* Acceptance test docs: http://codeception.com/docs/03-AcceptanceTests
* Acceptance test uitvoeren:
```
codecept run acceptance
```

# Phpunit

Met Phpunit kun je unit tests maken en uitvoeren. We gebruiken Phpunit in dit project voor unit tests.
* Als je Phpunit niet hebt geinstalleerd gebruik dan `phpunit.phar` in dit project:
```
php phpunit.phar YOURCOMMAND
```
* Phpunit initialiseren:
    * Maak een phpunit.xml in de root van je project (zie voorbeeld)
    * Maak een bootstrap PHP file die je aanroept in je phpunit.xml (zie voorbeeld phpunitbootstrap.php) 

