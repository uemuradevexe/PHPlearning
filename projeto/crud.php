<?php

$items = [];
$id = 1;

function menu() {
    echo "\n=== MENU CRUD ===\n";
    echo "1. Criar\n";
    echo "2. Listar\n";
    echo "3. Atualizar\n";
    echo "4. Deletar\n";
    echo "5. Sair\n";
    echo "Escolha: ";
}

// loop principal
while (true) {
    menu();
    $op = trim(fgets(STDIN));

    if ($op == "1") {
        echo "Digite um título: ";
        $title = trim(fgets(STDIN));
        global $items, $id;
        $items[$id] = $title;
        echo "Item criado com ID $id\n";
        $id++;

    } elseif ($op == "2") {
        echo "\n--- Lista de Itens ---\n";
        if (empty($items)) {
            echo "Nenhum item cadastrado.\n";
        } else {
            foreach ($items as $key => $val) {
                echo "[$key] $val\n";
            }
        }

    } elseif ($op == "3") {
        echo "ID para atualizar: ";
        $editId = (int)trim(fgets(STDIN));
        if (isset($items[$editId])) {
            echo "Novo título: ";
            $newTitle = trim(fgets(STDIN));
            $items[$editId] = $newTitle;
            echo "Item $editId atualizado!\n";
        } else {
            echo "ID não encontrado.\n";
        }

    } elseif ($op == "4") {
        echo "ID para deletar: ";
        $delId = (int)trim(fgets(STDIN));
        if (isset($items[$delId])) {
            unset($items[$delId]);
            echo "Item $delId deletado!\n";
        } else {
            echo "ID não encontrado.\n";
        }

    } elseif ($op == "5") {
        echo "Saindo...\n";
        break;

    } else {
        echo "Opção inválida.\n";
    }
}
