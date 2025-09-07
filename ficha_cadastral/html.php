<?php

$nome = "Ricardo Uemura";
$idade = 21;
$sexo = "Masculino";
$salario_mensal = 180000; 
$empregado = true;
$skills = [
    "PHP",
    "Laravel",
    "livewire",
    "MySQL",
    "JS",
    "TS",
    "Docker",
    "React",
    "Node",
    "Next.js"
];
$aposentadoria;
$status_empregado;
define("APOSENTADORIA_MASCULINA","65");
define("APOSENTADORIA_FEMININA","62");

$status_empregado = ($empregado == true) ? "Empregado" : "Desempregado"; 


$aposentadoria = ($sexo == "Masculino") ? APOSENTADORIA_MASCULINA : APOSENTADORIA_FEMININA;


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Cadastral</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <div class="container max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-8 transition-all duration-300 hover:shadow-xl">
            <h1 class="text-3xl font-bold text-center mb-6 text-indigo-600 hover:text-indigo-700 transition-colors duration-300">Ficha Cadastral</h1>

            <div class="space-y-4">
                <p class="bg-pink-50 p-3 rounded-md hover:bg-pink-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-pink-700">Nome:</span>
                    <strong class="text-pink-900"><?= $nome ?></strong>
                </p>

                <p class="bg-blue-50 p-3 rounded-md hover:bg-blue-100 transition-colors duration-300 transform hover:-translate-y-1 overflow-hidden">
                    <span class="text-blue-700">Idade:</span>
                    <strong class="text-blue-900"><?= $idade ?> anos</strong>
                </p>

                <p class="bg-purple-50 p-3 rounded-md hover:bg-purple-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-purple-700">Sexo:</span>
                    <strong class="text-purple-900"><?= $sexo ?></strong>
                </p>

                <p class="bg-green-50 p-3 rounded-md hover:bg-green-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-green-700">Salário mensal:</span>
                    <strong class="text-green-900">¥ <?= number_format($salario_mensal, 0, ',', '.') ?></strong>
                </p>

                <p class="bg-emerald-50 p-3 rounded-md hover:bg-emerald-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-emerald-700">Salário anual:</span>
                    <strong class="text-emerald-900">¥ <?= number_format($salario_mensal * 12, 0, ',', '.') ?></strong>
                </p>

                <p class="bg-cyan-50 p-3 rounded-md hover:bg-cyan-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-cyan-700">Status de emprego:</span>
                    <strong class="text-cyan-900"><?= $status_empregado ?></strong>
                </p>

                <p class="bg-teal-50 p-3 rounded-md hover:bg-teal-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-teal-700">Anos para aposentadoria:</span>
                    <strong class="text-teal-900"><?= $aposentadoria ?> anos</strong>
                </p>

                <div class="bg-violet-50 p-3 rounded-md hover:bg-violet-100 transition-colors duration-300 transform hover:-translate-y-1">
                    <span class="text-violet-700">Habilidades:</span>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <?php foreach ($skills as $skill): ?>
                            <span class="bg-violet-100 text-violet-800 px-3 py-1 rounded-full text-sm hover:bg-violet-200 transition-colors duration-300 hover:scale-105 transform cursor-default">
                                <?= $skill ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

</body>

</html>