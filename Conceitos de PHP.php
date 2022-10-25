<p>
    <?php echo "Hello Word! <br>"; ?>
</p>

<p>
    <?php echo 'Hello Word! \n'?>
</p>

<P>
    <?= "Hello Word" ?>
</p>



<!-----------INICIO-------------->
<?php

// Comentários
# Comentários


#----------Variáveis----------#


$variavel_1 = 100;
$variavel_2 = 10.5;
$variavel_3 = true || false;
$variavel_4 = "Tipo String";
$variavel_5 = [1, 2, 3];
$variavel_6 = "Pedro";
//$variavel_7 = new Pessoa();
$variavel_8 = null;
echo $variavel_1, "<br>";

echo var_dump(1 + 1), "<br>"; //Mostra o Valor da váriavel

#----------Tipos Aritméticos----------#

echo 1 + 1, "<br>";
echo 2 - 2, "<br>";
echo 2 / 2, "<br>";
echo 2 * 2, "<br>";
echo 2 ** 2, "<br>";
echo 2 % 2, "<br>";



#----------Operadores de Comparação----------#

echo 2 == '2', "<br>";
echo var_dump(2 === '2'), "<br>";
echo 3 <=> 2, "<br>";
echo "hjgdasdadsa" <=> "hdadaadsde", "<br>";



#----------Operadores Lógicos----------#

// && -- AND
// || -- OR
// !  -- NOT


#----------Concatenação----------#

echo $variavel_6." é lindo", "<br>";
echo "$variavel_6 é lindo", "<br>";

$variavel = "jcasjaas";
$variavel .= "jknaasd";

$variavel = $variavel."jknaasd";


#----------Array----------#

$array_1 = [1, 2, "sihadjaada"];
$array_2 = [
    [1,2,4],
    [231,321, "iw"],
    [123, 32, 2]
];
$array_3 = [
    'name' => 'Lucas',
    'age' => 27,
    'languages' => ['Python', 'PHP'],
    1 => 'alguma coisa'
];
echo var_dump($array_3['name']),"<br>";
echo var_dump($array_3['languages'][0]),"<br>";


#----------Manipulando Arquivos----------#

$file = fopen('teste.txt', 'w');
fwrite($file, 'opa mesmo');
fclose($file);
//ou
file_put_contents('teste.txt', 'opa mesmo');
//arquivo para leitura:
$content = file_get_contents('teste.txt');


#----------Estrutura de Lógicas e de Repetição----------#

// if (condition){
// }
// else {
// };


// if (condition):
// else:
// endif;


// switch(condition){
//     case: "sada";
//     default;
// };


for ($i = 0; $i <= 10; $i++){
    echo $i, "<br>";
};

$array_numerico = [1, 2, 3, 4];
$array_associativo = [
    'Name: ' => ' Lucas Eliaquin <br>',
    'Idade: ' => "27<br>" ,
    'Profissao: ' => ' desenvolvedor <br>'
];
foreach($array_associativo as $key => $num){
    echo $key, $num;
};


#----------Funções----------#

// function teste(){

// };
// teste();

// function elevar($a){
//     return $a ** 2;
// }
// echo elevar(5);

// function poow($a, $b = 2){
//     return $a ** $b;
// }
// echo poow(10, 3);

// function add($a, $b = 2, $c = 3){
//     return $a + $b + $c;
// }
// echo add(10, c:5); //Mudando o valor de C







