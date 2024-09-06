<?php
    $frutas = array("maça","laranja","banana");
    print_r($frutas); //escreve na teka is dadis basicos do array
    var_dump($frutas);//escrever os dosdos do array;
    echo count($frutas);//escreve na  tela a quantidade de intens que o arrau possui
    array_push($frutas," kiwi ");

    foreach($frutas as $fruta)
    {
        echo " ".$fruta;
    }
    echo "<br><h1>Exercicio Pessoa.</h1><br> ";

    $pessoas = array
    (
        array
        (
            "nome" => "Wylliam",
            "idade" => 29,
            "email" => "Wylliamflorentino@gmail.com"
        ),
        array
        (
            "nome" => "Priscila",
            "idade" => 22,
            "email" => "priscilaflorentino@gmail.com"
        ),
        array
        (
            "nome" => "Valdirene",
            "idade" => 40,
            "email" => "valdirenegabriel@gmail.com"
        ),
        array
        (
            "nome" => "sebastiao",
            "idade" => 51,
            "email" => "sebastiaoflorentino@gmail.com"
        ),
        array
        (
            "nome" => "Carlos",
            "idade" => 32,
            "email" => "carlostesta@gmail.com"
        ),
        array
        (
            "nome" => "Francisca",
            "idade" => 15,
            "email" => "Francisca@gmail.com"
        ),
        array
        (
            "nome" => "Fabio",
            "idade" => 42,
            "email" => "fabioramos@gmail.com"
        ),
        array
        (
            "nome" => "Marcia",
            "idade" => 55,
            "email" => "maricacardozo@gmail.com"
        ),
        array
        (
            "nome" => "Leonardo",
            "idade" => 22,
            "email" => "leocardozo@gmail.com"
        ),
        array
        (
            "nome" => "Lucas",
            "idade" => 32,
            "email" => "lucasriato@gmail.com"
        ),
        array
        (
            "nome" => "Sueli",
            "idade" => 60,
            "email" => "SueliAparecida@gmail.com"
        )
        );
/*
    echo "<br>";
    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";
    };*/

    echo"<table border='5'>";
    echo"<tr>";
    echo"<td>Nome</td>";
    echo"<td>Idade</td>";
    echo"<td>Email</td>";
    echo"</tr>";
    for($i=0;  $i <count($pessoas); $i++)
    {
        echo"<tr>";
        echo"<td>".$pessoas[$i]["nome"]."</td>";
        echo"<td>".$pessoas[$i]["idade"]."</td>";
        echo"<td>".$pessoas[$i]["email"]."</td>";
    }

    foreach($pessoas as $itemsLista)
    {
        echo"<tr>";
        echo"<td>".$itemsLista["nome"]."</td>";
        echo"<td>".$itemsLista["idade"]."</td>";
        echo"<td>".$itemsLista["email"]."</td>";

    };

    foreach($pessoas as $itemsLista)
    {
        echo"<tr>";
        foreach($itemsLista as $chave => $valor){
            echo"<td>".$valor."</td>";
        };
        echo"</tr>";        
    };

    echo "</table>";
?>
