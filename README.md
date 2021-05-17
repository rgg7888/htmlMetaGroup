# htmlMetaGroup

<h1>Meta Tags Group</h1>

<pre>
$metaGroup = new MetaGroup([
    'author' => "John Doe",
    'description' => "Free Web tutorials",
    'keywords' => "HTML, CSS, JavaScript"
]);
$metaGroup->Group();
</pre>

<p>
Como se observa en las lineas de arriba
inicializamos un objeto con el contructor
y le pasamos las claves y valores que 
se indican en el arreglo y finalmente
llamamos a la funcion Group() para 
incrustar las meta tags dentro del head.
</p>

<h2>Como insertar el grupo de meta tags dentro del head del wrapper ? </h2>

<pre>
page ([
    'idioma' => 'en',
    'head' => [
        $metaGroup->Group()
    ],
    'body' => [
        'contenido' => [],
        'atributos' => []
    ]
]);
</pre>

<p>
Como puede observar ,
solamente agregamos 
la funcion dentro del array
del contenido del head en la funcion page()
y de ese mode agregamos el grupo de meta tags 
dentro del wrapper page().
</p>