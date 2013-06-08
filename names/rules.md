# Naming rules

## Choose you names thoughtfully [CC]
Sa poteznym narzedziem komunikacji z innymi

## 1. Comunicate your intent [CC]
Komunikuja twoj zamiar. Jesli musisz uzywac komentarzy aby opisac co robia, znaczy ze zle wybrales nazwe

## 2. Avoid disinformation [CC]
Unikaj dezinformacji. Jesli musisz przejrzec kod by zrozumiec co robi dana zmienna - to znaczy ze zle wybrales nazwe

## 3. Pronouncable names [CC]
Tworz wymawialne nazwy. Bedziesz o nich rozmawial i uzywal ich w dyskusjach, czy sesjach pair programmingu, wiec lepiej zeby daly sie wymowic

## 4. Avoid encodings [CC]
Unikaj notacji informujacych o typach, np notacji wegierskiej. Niech kontrola typow zajmie sie chocby IDE

## 5. Choose your parts of speech well [CC]
Wybieraj nazwy zmiennych uzywajac odpowiednich czesci mowy. Nazwy klas i zmienne to rzeczowniki, metody to czasowniki, zmienne i metody boolowskie zaczynaj od 'is' (np. isOpen()).
Jesli kodu nie da sie czytac jako zdanie, mozna to bylo zrobic lepiej.

## 6. The Scope Rule [CC]

- Zmienne: Jesli ma krotki zasieg - ma tez krotka nazwe. Jesli dlugi zasieg - dluzsza opisowa nazwe (patrz 6.).
- Klasy: Jesli prywatne (w PHP nie ma wiec mozna ewentualnie podciagnac pod nieuzywane poza biblioteka czy uzywane tylko w waskim zakresie lokalnie - taka klasa moze miec dluga nazwe. Jesli "publiczna" klasa - kratka nazwe ulatwiajaca uzycie.
- Metody prywatne: Moga miec dlugie opisowe nazwy, bo ulatwiaja zrozumienie a sa uzywane tylko w obrebie klasy
- Metody publiczne: Krotkie nazwy poniewaz beda uzywane czesto na zewnatrz