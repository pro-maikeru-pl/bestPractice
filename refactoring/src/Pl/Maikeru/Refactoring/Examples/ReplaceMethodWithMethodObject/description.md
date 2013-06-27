# Replace Method with Method Object / Zastąpienie Metody Obiektem

## Steps
1. Utwórz nową klasę o nazwie zaczerpnietej z nazwy metody ktora wlasnie modyfikujemy
2. Stworz w niej prywatne pola:

- dla oryginalnego obiektu ktorego metode wlasnie modyfikujemy
- dla kazdej zmiennej lokalnej i kazdego parametru oryginalnej metody

3. W konstruktorze nowostworzonego obiektu przekaz wszystkie te dane
(obiekt posiadajacy oryginalna metode + parametry oryginalnej metody) i przypisz je do stworzonych prywatnych pol w nowym obiekcie.
4. W nowej klasie utworz metode compute i przekopiuje do niej zawartosc oryginalnej metody.
5. Jesli trzeba odwolac sie do metod oryginalnego obietu wykorzystaj do tego przekazany obiekt, a jesli do parametrow oryginalnej metody przez this,
poniewaz zostaly one przypisane w konstruktorze nowego obiektu.
6. Zastap tresc oryginalnej metody kodem tworzacym nowododany obiekt podajac odpowiednie parametry do konstruktora i wywolaj na nim nowa metode calculate.
7. Uruchom testy
8. Na nowostworzonym obiekcie mozesz niezaleznie przeprowadzic dalsza refaktoryzacje.