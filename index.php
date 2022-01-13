<?php

# Funcao converte Ano em Seculo
/**
 * @param int $ano
 * @return int
 */
function seculoAno(int $ano): int
{
    $ano = abs($ano);

    return ceil($ano / 100);
}


echo "século " . seculoAno(1905) . "<br/>";
echo "século " . seculoAno(1700) . "<br/>";


# testando a funcao seculoAno() do ano 1 a 3000
/* $century = 0;
for ($count = 1; $count <= 3000; $count++) {
    if (seculoAno($count) != $century) {
        $century = seculoAno($count);
        echo "século " . $century . "<br/>";
    }
} */
