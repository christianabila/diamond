# Project specification

As seen in a YouTube video, print a diamond shaped by capitalized sletters of the English alphabet (A-Z) and with the period symbol (".") as filler.

Input: A letter of the English alphabet (A-Z)
Output: Diamond (= two triangles, upper half mirrors lower half)

E.g.

Input: "E"

....A....
...B.B...
..C...C..
.D.....D.
E.......E
.D.....D.
..C...C..
...B.B...
....A....

Input: "C"

..A..
.B.B.
C...C
.B.B.
..A..

## Ideen zur Umsetzung

Position der ersten Reihe = Position des letzten Buchstabens im Alphabet

$alphabet = ['A', 'B', 'C',...]; -> gibt es bereits eine PHP-Lösung dafür?

Position des eingegebenen Buchstabens herausfinden.

Innere Punkte: Ungerade Anzahl + 2: 0, 1, 3, 5, 7,...

