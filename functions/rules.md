# Functions rules

## Funkcje mają być małe [CC]

## A i tak powinny być jeszcze mniejsze [CC]

## Dużo dobrze nazwanych małych funkcji przyspiesza zrozumienie kodu [CC]

## Nie ma co się przejmować minimalny narzutem związanym z wywoływaniem funkcji [CC]
Narzut jest obecnie tak minimalny, ze raczej myslenie o tym przy prawie wyszstkich tworzonych probramach jest pozbawione sensu.

## W dlugich funkcjach prawdopodobnie chowają się klasy [CC]
Należy je wyodrębnić. Jeśli chcesz prawidłowo podzielić program na klasy - upewnij się, że funkcje są małe.

## Funkcja robi tylko jedną rzecz i robi ją dobrze [CC]
Jak stwierdzić, czy funkcja robi tylko jedną rzecz?

## Jedynym wskaznikiem, czy funkcja robi tylko jedna rzecz jest taki, ze nie mozna z niej wydzielic juz zadnej innej
Jeśli chcesz by:

- by funkcja i kod były małe, przejrzyste i łatwe do czytania
- móc nadać funkcjom ładne nazwy
- znaleźć opdowiedzialności, które powinny być odrębnymi klasami
- by inni czytając kod stwierdzali, że robi to czego oczekiwali czytając go

Ekstrahuj (a grzeczniej wyodrębniaj) dopóki się da.


## Wyodrębniaj dopóki się da. [CC]
Jest to najważniejsze narzędzie, które pozwoli być zgodnym z przedstawionymi zasadami.
Jeśli możesz wyodrębnić funkcję z innej funkcji - powinieneś to zrobić. Znaczyło to bowiem, że tamta funkcja z definicji robiła więcej niż jedną rzecz.

