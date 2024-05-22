<div class="titulo">Desafio Tabela</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        [center] {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            width: 70%;
            height: 80%;
            border: 1px solid #444;
            border-collapse: collapse;
            margin: 20px 0;

        }

        table tr {
            border: 1px solid #444;

        }

        table td,
        th {
            padding: 10px 20px;
            border: 1px solid #444;

        }

        [azul] {
            background-color: #46a2da;
            color: #fff;
        }
    </style>
</head>

<body>
    <div center>
        <table>
            <tr>
                <th azul> Nome</th>
                <th azul> Sobrenome</th>
                <th azul> Telefone</th>
            </tr>
            <?php
            $nomes = [
                0 => [
                    0 => 'Lucas', 'Barbosa', '85999411992'
                ],
                [
                    0 => 'Leonardo', 'Pereira', '85987698892'
                ],
                [
                    0 => 'Vinícius', 'Henrique', '87203291'
                ],
                [
                    0 => 'Luana', 'Santos', '87203291'
                ],

            ];

            foreach ($nomes as $indice => $valor) {
                if ($indice % 2 !== 0) echo "<tr azul> ";
                else echo "<tr> ";
                foreach ($valor as $indice2 => $coll) {
                    echo "<td align='center'>{$coll}</td>";
                }
                echo " </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>