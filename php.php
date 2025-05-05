<?php // Em PHP, arrays são estruturas que armazenam múltiplos valores em uma única variável.
// Eles podem conter números, strings e até outros arrays. Arrays são úteis para organizar coleções de dados de forma eficiente.

// Declaração de arrays em PHP:

$frutas = array("Maçã", "Banana", "Laranja"); // ou

$frutas = ["Maçã", "Banana", "Laranja"];


echo $frutas[0]; // Exibe "Maçã" - Acesso a valores: 


$listaVazia = []; // Comportamento de um array vazio:

// ----------------------------------------------------------

// Solução para gerenciar a lista de compras:

// 1 - Declarar o array:

$listaCompras = [
    ["nome" => "Maçã", "quantidade" => 6, "categoria" => "Frutas"],
    ["nome" => "Leite", "quantidade" => 2, "categoria" => "Laticínios"],
    ["nome" => "Alface", "quantidade" => 1, "categoria" => "Vegetais"]
];
// 2 - Verificar se um item existe e exibir as informações:

$itemProcurado = "Leite";
$encontrado = false;

foreach ($listaCompras as $item) {
    if ($item["nome"] === $itemProcurado) {
        echo "Item encontrado:<br>";
        echo "Nome: " . $item["nome"] . "<br>";
        echo "Quantidade: " . $item["quantidade"] . "<br>";
        echo "Categoria: " . $item["categoria"] . "<br>";
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Item não encontrado na lista de compras.";
}


// Explicação: As Arrays são declarados com [] ou array(), valores são acessados por índice, arrays vazios não têm elementos, e podemos gerenciar listas (como a de compras) declarando arrays associativos e usando foreach para buscar e mostrar informações.

?>