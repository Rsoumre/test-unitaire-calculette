# Test Unitaire pour la Calculette

Ce projet est un exemple de test unitaire pour une calculette simple. Il utilise le framework de test PHPUnit pour vérifier que les opérations de base (addition, soustraction, multiplication, division) fonctionnent correctement.

## Tests réalisés avec PHPUnit
  Création du fichier `tests/CalculatorTest.php` contenant les tests unitaires de la classe `Calculator`. Chaque test vérifie une opération ou un comportement différent de la calculatrice.

### Lancement des tests
Pour lancer les tests, utilisez la commande suivante dans votre terminal :

```bash
./vendor/bin/phpunit tests/CalculatorTest.php 
```
![Lancement des tests avec PHPUnit](<images/Capture d’écran du 2026-06-09 11-54-43.png>)

### Lancement des tests fail avec PHPUnit
Pour lancer les tests, utilisez la commande suivante dans votre terminal :
```bash
./vendor/bin/phpunit tests/CalculatorTest.php
```
![Lancement des tests fail avec PHPUnit](<images/Capture d’écran du 2026-06-10 10-14-28.png>)

## Tests unitaires JavaScript avec Jest
  Création du fichier `tests/calculator.test.js` contenant les tests unitaires de la fonction `calculate()`. Chaque test vérifie une opération ou un comportement différent de la
  calculatrice.

  ### Lancement des tests successif avec Jest
  Pour lancer les tests, utilisez la commande suivante dans votre terminal :

  ```bash
  npm test
  ```
  ![Lancement des tests avec Jest](<images/Capture d’écran du 2026-06-10 09-42-46.png>)

### Lancement des tests fail avec Jest
Pour lancer les tests, utilisez la commande suivante dans votre terminal :

```bash 
npm test
```
![Lancement des tests avec Jest](<images/Capture d’écran du 2026-06-10 09-56-14.png>)

### Lancement des tests corrects avec Jest
Pour lancer les tests, utilisez la commande suivante dans votre terminal :
```bash 
npm test
```
![test corriger](<images/Capture d’écran du 2026-06-10 10-00-11.png>)
