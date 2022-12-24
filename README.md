# Algoritmo de ordenación
Implementación de varios algoritmos de ordenación en PHP.

---

## Commands
Comandos de instalación
### Execution composer
`composer install`
### Running a web server
  1. ` cd public `
  2. ` php -S localhost:8000`
### Execution of tests
`php ./vendor/bin/phpunit ./tests/ExampleTest.php`


## Algoritmos implementados

 1. *Buble Sort*
    Funciona revisando cada elemento de la lista que va a ser ordenada con el siguiente, intercambiándolos de posición si están en el orden equivocado. Es necesario revisar varias veces toda la lista hasta que no se necesiten más intercambios, lo cual significa que la lista está ordenada

    ![Imagen algoritmo Bubble Sort!](/public/images/markdown/bubble_sort.png)

 2. *Ordenamiento por selección*
    En el contexto de un arreglo, el proceso de este algoritmo consiste en buscar el menor elemento e intercambiarlo por el elemento en la primera posición. Luego se busca el segundo elemento más pequeño del arreglo y se intercambia con el elemento de la segunda posición.

    Este método es ineficiente para seleccionar un único elemento, pero es eficiente cuando se realizan múltiples selecciones del vector, en este caso solo es necesario una ordenación costosa inicial, seguida por muchas operaciones poco costosas de selección – O(1) para un vector, aunque la selección es O(n) en una lista
    
    ![Imagen algoritmo Orden por selección!](/public/images/markdown/ordenacion_seleccion.jfif)

 3. *Ordenamiento por Inserción*
    El objetivo de este proceso es facilitar la búsqueda posterior de los elementos del conjunto ordenado. La búsqueda de información es una operación básica en el proceso de datos, de ahí que por extensión, la ordenación se convierta también en una actividad fundamental en dicho procesamiento de datos.

    Aunque sigue siendo O(n2), funciona de una manera ligeramente diferente. Siempre mantiene una sublista ordenada en las posiciones inferiores de la lista. Cada ítem nuevo se “inserta” de vuelta en la sublista previa de manera que la sublista ordenada sea un ítem más larga.
    
    ![Imagen algoritmo Orden por inserción!](/public/images/markdown/ordenamiento-por-insercion.jpg)
    