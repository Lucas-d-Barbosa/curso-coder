<div class="titulo">Desafio Tabela 2</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        form>* {
            font-size: 1.8rem;
        }

        [center] {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
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

    <div center>
        <form action="#" method="post">
            <input type="text" name="linhas" value="<?=$_POST['linhas'] ?? 4 ?>">
            <input type="text" name="colunas" value="<?= $_POST['colunas'] ?? 4 ?>">
            <button>
                Gerar Tabela
            </button>
        </form>
        <table>
            <?php
            if (isset($_POST['linhas']) && isset($_POST['colunas'])) {
                $linhas = $_POST['linhas'];
                $colunas = $_POST['colunas'];
                $k = 1;
                for ($i = 1; $i <= $linhas; $i++) {
                    echo "<tr>";
                    for ($j = $k; $j < $k + $colunas; $j++) {
                        echo "<td>{$j}</td>";
                    }
                    $k += $colunas;
                    echo "</tr>";
                }
            }

            ?>

        </table>
    </div>

</body>

</html>