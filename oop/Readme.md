Creati clasa User din care vor fi extinse clasele Student, Teacher. Clasa de baza va aveam proprietatile:

- 'name'
- 'role'
- cele 2 clase care mostenesc clasa User vor seta din constructori numele primit ca parametru si rolul specific clasei
- clasa Student va mai avea si proprietatile 'an' si 'grupa'
- clasa Teacher va mai aveam si proprietatea 'disciplina'
- creati getteri si setteri pentru cele 4 clase

Bonus:

    Clasa Student va avea un array pentru discipline si o functie adaugaNota($disciplina, $nota), iar fiecare Teacher, va avea o functie noteaza($student, $nota), care va primi o instanta a unei clase student, si isi va adauga o nota la discliplina sa, pe instanta studentului.

Afisati intr-o noua pagina atributele celor 2 clase ce mostenesc User;