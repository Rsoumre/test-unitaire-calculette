# Test Unitaire pour la Calculette

Ce projet est un exemple de test unitaire pour une calculette simple. Il utilise le framework de test PHPUnit pour vérifier que les opérations de base (addition, soustraction, multiplication, division) fonctionnent correctement.

## Tests réalisés

  - **testAddition** : vérifie que `2+3` retourne `5`
  - **testSubtraction** : vérifie que `5-4` retourne `1`
  - **testMultiplication** : vérifie que `2*3` retourne `6`
  - **testDivision** : vérifie que `6/3` retourne `2`
  - **testComplexExpression** : vérifie que `2+3*4-5` retourne `9` (priorité des opérations)
  - **testDivisionByZero** : vérifie qu'une exception est levée en cas de division par zéro

### Lancement des tests
Pour lancer les tests, utilisez la commande suivante dans votre terminal :

```bash
./vendor/bin/phpunit tests/CalculatorTest.php 
```
![Lancement des tests avec PHPUnit](<images/Capture d’écran du 2026-06-09 11-54-43.png>)

