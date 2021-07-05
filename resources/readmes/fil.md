Fil est un langage de programmation appartenant aux paradigmes fonctionnel et orienté objet.

Le compilateur utilise les technologies [Flex](https://fr.wikipedia.org/wiki/Flex_(logiciel)) et [Bison](https://fr.wikipedia.org/wiki/GNU_Bison) pour analyser, découper en tokens et transformer en C les fichiers .fil.

---

## Exemples

Fonction récusive factorielle
```fil
fun fact(n: int) = if (n > 1) n * fact(n - 1) else 1
```

Tri à bulle
```fil
import { List } from containers
import { shuffle } from algorithm

fun bubbleSort(l: List<T>) {
    for i in (l.size() - 1)..1 {
        for j in 0..(i - 1) {
            if (l[j+1] < l[j]) {
                val buf = l[j]
                l[j] = l[j + 1]
                l[j + 1] = buf
            }
        }
    }
}

fun main() {
    val tab: List<int>
    for i in 0..9 {
        tab.pushBack(i)
    }
    shuffle(tab.begin(), tab.end())
    bubbleSort(tab)
}
```

Affichage d'un tableau
```fil
import { List } from containers
import { sout } from ios.iostream

fun affiche(l: List<T>) {
    for v in l
        sout << v << " "
    sout << "\n"
}
```

Parcours d'un tableau associatif
```fil
import { Map } from containers

fun parcours(m: Map<K, V>) {
    for key in m.keys() {
        var value = m[key]
    }
}
```

Déclaration d'une classe Personnage
```fil
import { String, Date } from types

class Personnage(var prenom: String, var nom: String, 
                 var anneeNaissance: int) {
    private var nomComplet: String

    init {
        this.nomComplet = prenom + " " + nom
    }

    fun getAge() = Date.now().year - this.anneeNaissance
}
```