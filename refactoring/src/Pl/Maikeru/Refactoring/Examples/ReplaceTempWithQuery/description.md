# Replace Temp with Query / Zastąpienie Zmiennej Tymczasowej Zapytaniem

## Steps
1. Znajdz zmienna tymczasowa, ktora ma tylko raz przypiywana wartosc (a jesli jest wiecej niz raz uzyj mozesz uzyc Podziału Zmiennej Tymczasowej)
2. Upewnij sie, ze prawa strona przypisania nie ma innych efektow ubocznych (a jesli tak mozesz zastosowac Rozdzielenie Zapytania i Modyfikacji)
3. Stworz metode prywatna i przenies do niej logike z prawej strony przypisania tak by zwracala wynik (jesli okaze sie ze ma byc wykorzystywana poza klasa mozesz potem zmienic ja na publiczna)
4. Podmien prawa strone przypisania z oryginalnej metody wywolaniem nowostworzonej metody.
5. Uruchom testy
6. Podmien wszystkie wystapienia tymczasowej zmiennej w oryginalnej metodzie na wywolanie nowostworzonej metody.
7. Usun tymczasowa zmienna.
8. Uruchom testy.
