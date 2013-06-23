# Extract Method / Ekstrakcja Metody

## Steps
1. Stworz nowa metode z nazwa opicujaca CEL dzialania
2. Skopiuj kod ktory ma zostac wyodrebniony do ciala tej nowostworzonej metody
3. W wyekstrahowanym kodzie wyszukaj zmiennych lokalnych (na razie jednak nic z nimi nie rob) - niektore z nich moga stac sie potem parametrami nowej metody.
4. Jesli wyekstrahowany kod modyfikuje jedna lokalna zmienna, ktora jest uzywana po wylowaniu nowostworzonej metody, zwroc ja jako wynik dzialania nowostworzonej metody.
Jesli takich zmiennych jest wiecej, obecna strategia refaktoryzacji nie moze byc zastosowana do czasu uporzadkowania kodu za pomoca innych strategii refaktoryzacyjnych, np. Podzial Zmiennej Tymczasowej lub Zastapienie Zmiennej Tymczasowej Zapytaniem
5. Zmienne lokalne w wyekstrahowanym kodzie, ktore w momencie wywolania tej nowej metody sa ustawione poza nia i nie da sie jednoznacznie okreslic ich wartosci przekaz jako parametry nowotworzonej metody.
6. Podmien wyekstrahowany kod wywolaniem nowostworzonej metody, a zmienne lokalne starej metody ktore nie maja dalej sensu usun.
7. Uruchom testy.
