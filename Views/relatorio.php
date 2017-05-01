<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 29/01/17
 * Time: 22:26
 */
    if($_POST) {
        $horaLoc = $_POST["hrLocInput"];
        $defKLocInput = $_POST["defKLocInput"];
        $yeildInput = $_POST["yeildInput"];
        $afrInput = $_POST["afrInput"];

        $totalTempoInput = $_POST["totalTempoInput"];
        $totalDefInsInput = $_POST["totalDefInsInput"];
        $totalDefRevInput = $_POST["totalDefRevInput"];

        if($horaLoc == "" || $defKLocInput == "" || $yeildInput == "" || $afrInput == "" || $totalTempoInput == "" || $totalDefInsInput == "" ||
        $totalDefRevInput == "") {
            echo "<script>alert('Todos os campos de totais devem estar preenchidos!');javascript:history.back(-1);</script>";
        }
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>PSP for Students</title>

    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Tema opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Última versão JavaScript compilada e minificada -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Jquery 3.1.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>


    <script type="text/javascript">
        $(function () {
            Highcharts.chart('container', {
                chart: {
                    type: 'pie',
                    options3d: {
                        enabled: true,
                        alpha: 45
                    }
                },
                title: {
                    text: 'Resumo Geral do Projeto em PSP'
                },
                subtitle: {
                    text: 'Resumo do Desempenho'
                },
                plotOptions: {
                    pie: {
                        innerSize: 100,
                        depth: 45
                    }
                },
                series: [{
                    name: 'Delivered amount',
                    data: [
                        ['Horas/LOC', <?php echo $horaLoc; ?>],
                        ['Defeitos/KLOC', <?php echo  $defKLocInput; ?>],
                        ['Yeild', <?php echo $yeildInput; ?>],
                        ['A/F-R', <?php echo  $afrInput; ?>],
                        ['Total de Tempo em Minutos', <?php echo $totalTempoInput; ?>],
                        ['Total de Defeitos Inseridos', <?php echo $totalDefInsInput; ?>],
                        ['Total de Defeitos Removidos', <?php echo $totalDefRevInput; ?>]
                    ]
                }]
            });
        });
    </script>

</head>
<body>


<a href="../index.php"><button class="btn btn-primary" >Voltar</button></a>
<div class="jumbotron">
<div id="container" style="height: 400px"></div>

</div>
</body>
</html>