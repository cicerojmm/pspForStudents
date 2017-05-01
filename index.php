<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 21/01/17
 * Time: 13:48
 */

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


    <!-- CSS e JS do usuário-->
    <link rel="stylesheet" href="css/index.css" >
    <script src="js/tabelaResumo.js" type="text/javascript"></script>
    <script src="js/tabelaTempo.js" type="text/javascript"></script>
    <script src="js/tabelaDefeitos.js" type="text/javascript"></script>

</head>
<body>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1 id="titulo">PSP for Students</h1>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <form action="Views/relatorio.php" method="post">
                    <input type="hidden" value="" id="hrLocInput" name="hrLocInput">
                    <input type="hidden" value="" id="defKLocInput" name="defKLocInput">
                    <input type="hidden" value="" id="yeildInput" name="yeildInput">
                    <input type="hidden" value="" id="afrInput" name="afrInput">
                    <input type="hidden" value="" id="totalTempoInput" name="totalTempoInput">
                    <input type="hidden" value="" id="totalDefInsInput" name="totalDefInsInput">
                    <input type="hidden" value="" id="totalDefRevInput" name="totalDefRevInput">
                    <button type="submit" class="btn btn-primary btn-lg" id="submit">Gráfico</button>
                </form>


            </div>
        </div>
    </div>
</div>
    <div class="container">
        <!-- Painel de Informações Gerais-->
        <div class="panel panel-primary">



            <div class="panel-heading">Informações Gerais</div>
            <div class="panel-body">

                <table class="table table-striped">
                    <!-- Tabela de resumo -->
                    <tr>
                        <td></td>
                        <td><strong>Planejado</strong></td>
                        <td><strong>Realizado</strong></td>
                        <td><strong>Até o momento</strong></td>
                    </tr>
                    <tr>
                        <td colspan="4" id="colspan"><strong>Resumo</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Minutos/LOC</strong></td>
                        <td><input type="number" min="0" name="minLOCPlan" id="minLOCPlan"></td>
                        <td><input type="number" min="0" name="minLOCRea" id="minLOCRea"></td>
                        <td><input type="number" min="0" name="minLOCAte" id="minLOCAte"></td>
                    </tr>
                    <tr>
                        <td><strong>LOC/hora</strong></td>
                        <td><input type="number" min="0" name="horaLOCPlan" id="horaLOCPlan"></td>
                        <td><input type="number" min="0" name="horaLOCRea" id="horaLOCRea"></td>
                        <td><input type="number" min="0" name="horaLOCAte" id="horaLOCAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Defeitos/KLOC</strong></td>
                        <td><input type="number" min="0" name="defKLOCPlan" id="defKLOCPlan"></td>
                        <td><input type="number" min="0" name="defKLOCRea" id="defKLOCRea"></td>
                        <td><input type="number" min="0" name="defKLOCAte" id="defKLOCAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Yield</strong></td>
                        <td><input type="number" min="0" name="yieldPlan" id="yieldPlan"></td>
                        <td><input type="number" min="0" name="yieldRea" id="yieldRea"></td>
                        <td><input type="number" min="0" name="yieldAte" id="yieldAte"></td>
                    </tr>
                    <tr>
                        <td><strong>A/F-R</strong></td>
                        <td><input type="number" min="0" name="afrPlan" id="afrPlan"></td>
                        <td><input type="number" min="0" name="afrRea" id="afrRea"></td>
                        <td><input type="number" min="0" name="afrAte" id="afrAte"></td>
                    </tr>


                    <!-- Tabela de tamanho do programa-->

                    <tr>
                        <td colspan="4" id="colspan"><strong>Tamanho do Programa</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Novo e Alterado</strong></td>
                        <td><input type="number" min="0" name="novoAltPlan" id="novoAltPlan"></td>
                        <td><input type="number" min="0" name="novoAltRea" id="novoAltRea"></td>
                        <td><input type="number" min="0" name="novoAltAte" id="novoAltAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Tamanho Máximo</strong></td>
                        <td><input type="number" min="0" name="tamMaxPlan" id="tamMaxPlan"></td>
                        <td><input type="number" min="0" name="tamMaxRea" id="tamMaxRea"></td>
                        <td><input type="number" min="0" name="tamMaxAte" id="tamMaxAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Tamanho Mínimo</strong></td>
                        <td><input type="number" min="0" name="tamMinPlan" id="tamMinPlan"></td>
                        <td><input type="number" min="0" name="tamMinRea" id="tamMinRea"></td>
                        <td><input type="number" min="0" name="tamMinAte" id="tamMinAte"></td>
                    </tr>

                    <!-- Botões -->
                    <tr><td></td></tr>
                    <tr>
                        <td><button type="button" class="btn btn-primary btn-lg" id="atualizarPlanResumo">Atualizar</button>
                            <!--<button type="button" class="btn btn-default btn-lg" id="salvarPlanResumo">Salvar</button>--></td>
                    </tr>
                </table>


            </div>

        </div>

        <!-- Painel de Informações sobre Tempo-->

        <div class="panel panel-primary">

            <div class="panel-heading">Informações de Tempo</div>
            <div class="panel-body">

                <table class="table table-striped">
                    <!-- Tabela de resumo -->
                    <tr>
                        <td colspan="5" id="colspan"><strong>Tempo (minutos)</strong></td>
                    </tr>
                    <td></td>
                    <td><strong>Planejado</strong></td>
                    <td><strong>Realizado</strong></td>
                    <td><strong>Até o momento</strong></td>
                    <td><strong>% Até o momento</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Planejamento</strong></td>
                        <td><input type="number" min="0" name="planPlan" id="planPlan"></td>
                        <td><input type="number" min="0" name="planRea" id="planRea"></td>
                        <td><input type="number" min="0" name="planAte" id="planAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Projeto</strong></td>
                        <td><input type="number" min="0" name="projPlan" id="projPlan"></td>
                        <td><input type="number" min="0" name="projRea" id="projRea"></td>
                        <td><input type="number" min="0" name="projAte" id="projAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Codificação</strong></td>
                        <td><input type="number" min="0" name="codPlan" id="codPlan"></td>
                        <td><input type="number" min="0" name="codRea" id="codRea"></td>
                        <td><input type="number" min="0" name="codAte" id="codAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Revisão de código</strong></td>
                        <td><input type="number" min="0" name="revPlan" id="revPlan"></td>
                        <td><input type="number" min="0" name="revRea" id="revRea"></td>
                        <td><input type="number" min="0" name="revAte" id="revAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Compilação</strong></td>
                        <td><input type="number" min="0" name="compPlan" id="compPlan"></td>
                        <td><input type="number" min="0" name="compRea" id="compRea"></td>
                        <td><input type="number" min="0" name="compAte" id="compAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Teste</strong></td>
                        <td><input type="number" min="0" name="testPlan" id="testPlan"></td>
                        <td><input type="number" min="0" name="testRea" id="testRea"></td>
                        <td><input type="number" min="0" name="testAte" id="testAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Pós-Morte</strong></td>
                        <td><input type="number" min="0" name="pmPlan" id="pmPlan"></td>
                        <td><input type="number" min="0" name="pmRea" id="pmRea"></td>
                        <td><input type="number" min="0" name="pmAte" id="pmAte"></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><input type="number" min="0" name="totalPlan" id="totalPlan"></td>
                        <td><input type="number" min="0" name="totalRea" id="totalRea"></td>
                        <td><input type="number" min="0" name="totalAte" id="totalAte"></td>
                        <td><input type="number" min="0" name="totalAteP" id="totalAteP"></td>
                    </tr>

                    <!-- Botões -->
                    <tr><td></td></tr>
                    <tr>
                        <td><button type="button" class="btn btn-primary btn-lg" id="atualizarPlanTempo">Atualizar</button>
                            <!--<button type="button" class="btn btn-default btn-lg" id="salvarPlanTempo">Salvar</button>--></td>
                    </tr>
                </table>

            </div>

        </div>


        <!-- Painel de Informações sobre Defeitos-->

        <div class="panel panel-primary">

            <div class="panel-heading">Informações de Defeitos</div>
            <div class="panel-body">

                <table class="table table-striped">
                    <!-- Tabela de resumo -->
                    <tr>
                        <td colspan="5" id="colspan"><strong>Defeitos Inseridos</strong></td>
                    </tr>
                    <td></td>
                    <td><strong>Planejado</strong></td>
                    <td><strong>Realizado</strong></td>
                    <td><strong>Até o momento</strong></td>
                    <td><strong>% Até o momento</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Planejamento</strong></td>
                        <td><input type="number" min="0" name="planPlanDI" id="planPlanDI"></td>
                        <td><input type="number" min="0" name="planReaDI" id="planReaDI"></td>
                        <td><input type="number" min="0" name="planAteDi" id="planAteDi"></td>
                    </tr>
                    <tr>
                        <td><strong>Projeto</strong></td>
                        <td><input type="number" min="0" name="projPlanDI" id="projPlanDI"></td>
                        <td><input type="number" min="0" name="projReaDI" id="projReaDI"></td>
                        <td><input type="number" min="0" name="projAteDI" id="projAteDI"></td>
                    </tr>
                    <tr>
                        <td><strong>Codificação</strong></td>
                        <td><input type="number" min="0" name="codPlanDI" id="codPlanDI"></td>
                        <td><input type="number" min="0" name="codReaDI" id="codReaDI"></td>
                        <td><input type="number" min="0" name="codAteDI" id="codAteDI"></td>
                    </tr>
                    <tr>
                        <td><strong>Revisão de código</strong></td>
                        <td><input type="number" min="0" name="revPlanDI" id="revPlanDI"></td>
                        <td><input type="number" min="0" name="revReaDI" id="revReaDI"></td>
                        <td><input type="number" min="0" name="revAteDI" id="revAteDI"></td>
                    </tr>
                    <tr>
                        <td><strong>Compilação</strong></td>
                        <td><input type="number" min="0" name="compPlanDI" id="compPlanDI"></td>
                        <td><input type="number" min="0" name="compReaDI" id="compReaDI"></td>
                        <td><input type="number" min="0" name="compAteDI" id="compAteDI"></td>
                    </tr>
                    <tr>
                        <td><strong>Teste</strong></td>
                        <td><input type="number" min="0" name="testPlanDI" id="testPlanDI"></td>
                        <td><input type="number" min="0" name="testReaDI" id="testReaDI"></td>
                        <td><input type="number" min="0" name="testAteDI" id="testAteDI"></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><input type="number" min="0" name="totalPlanDI" id="totalPlanDI"></td>
                        <td><input type="number" min="0" name="totalReaDI" id="totalReaDI"></td>
                        <td><input type="number" min="0" name="totalAteDI" id="totalAteDI"></td>
                        <td><input type="number" min="0" name="totalAtePdi" id="totalAtePdi"></td>
                    </tr>


                    <tr>
                        <td colspan="5" id="colspan"><strong>Defeitos Removidos</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Planejamento</strong></td>
                        <td><input type="number" min="0" name="planPlanDR" id="planPlanDR"></td>
                        <td><input type="number" min="0" name="planReaDR" id="planReaDR"></td>
                        <td><input type="number" min="0" name="planAteDR" id="planAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Projeto</strong></td>
                        <td><input type="number" min="0" name="projPlanDR" id="projPlanDR"></td>
                        <td><input type="number" min="0" name="projReaDR" id="projReaDR"></td>
                        <td><input type="number" min="0" name="projAteDR" id="projAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Codificação</strong></td>
                        <td><input type="number" min="0" name="codPlanDR" id="codPlanDR"></td>
                        <td><input type="number" min="0" name="codReaDR" id="codReaDR"></td>
                        <td><input type="number" min="0" name="codAteDR" id="codAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Revisão de Código</strong></td>
                        <td><input type="number" min="0" name="revPlanDR" id="revPlanDR"></td>
                        <td><input type="number" min="0" name="revReaDR" id="revReaDR"></td>
                        <td><input type="number" min="0" name="revAteDR" id="revAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Compilação</strong></td>
                        <td><input type="number" min="0" name="compPlanDR" id="compPlanDR"></td>
                        <td><input type="number" min="0" name="compReaDR" id="compReaDR"></td>
                        <td><input type="number" min="0" name="compAteDR" id="compAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Teste</strong></td>
                        <td><input type="number" min="0" name="testPlanDR" id="testPlanDR"></td>
                        <td><input type="number" min="0" name="testReaDR" id="testReaDR"></td>
                        <td><input type="number" min="0" name="testAteDR" id="testAteDR"></td>
                    </tr>
                    <tr>
                        <td><strong>Total</strong></td>
                        <td><input type="number" min="0" name="totalPlanDR" id="totalPlanDR"></td>
                        <td><input type="number" min="0" name="totalReaDR" id="totalReaDR"></td>
                        <td><input type="number" min="0" name="totalAteDR" id="totalAteDR"></td>
                        <td><input type="number" min="0" name="totalAtePDR" id="totalAtePDR"></td>
                    </tr>


                    <!-- Botões -->
                    <tr><td></td></tr>
                    <tr>
                        <td><button type="button" class="btn btn-primary btn-lg" id="atualizarPlanDefeitos">Atualizar</button>
                            <!--<button type="button" class="btn btn-default btn-lg" id="salvarPlanDefeitos">Salvar</button>--></td>
                    </tr>

                </table>

            </div>

        </div>

    </div>


</body>
</html>