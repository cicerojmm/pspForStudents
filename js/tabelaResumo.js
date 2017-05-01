/**
 * Created by ciceromoura on 28/01/17.
 */
$(document).ready(function() {


    desabilitaCampos();

    $("#atualizarPlanResumo").click(function (e) {
        e.preventDefault();

        var minutosLOC;
        var defeitosRemovidos;
        var tamanhoMaximo;
        var defeitosInseridos;
        var tempoTotal;

        minutosLOC = $('#minLOCPlan').val();
        defeitosRemovidos = $('#totalPlanDR').val();
        tamanhoMaximo = $('#tamMaxPlan').val();
        defeitosInseridos = $('#totalPlanDI').val();
        tempoTotal = $('#tempMaxPlan').val();

        requisicaoAjax(minutosLOC, defeitosRemovidos, tamanhoMaximo, defeitosInseridos, tempoTotal,
                        "#horaLOCPlan", "#defKLOCPlan", "#yieldPlan", "#afrPlan");

        minutosLOC = $('#minLOCRea').val();
        defeitosRemovidos = $('#totalReaDR').val();
        tamanhoMaximo = $('#tamMaxRea').val();
        defeitosInseridos = $('#totalReaDI').val();
        tempoTotal = $('#tempMaxRea').val();

        requisicaoAjax(minutosLOC, defeitosRemovidos, tamanhoMaximo, defeitosInseridos, tempoTotal,
            "#horaLOCRea", "#defKLOCRea", "#yieldRea", "#afrRea");

        minutosLOC = $('#minLOCAte').val();
        defeitosRemovidos = $('#totalAteDR').val();
        tamanhoMaximo = $('#tamMaxAte').val();
        defeitosInseridos = $('#totalAteDI').val();
        tempoTotal = $('#tempMaxAte').val();

        requisicaoAjax(minutosLOC, defeitosRemovidos, tamanhoMaximo, defeitosInseridos, tempoTotal,
            "#horaLOCAte", "#defKLOCAte", "#yieldAte", "#afrAte");
    });




});


function requisicaoAjax(minutosLOC, defeitosRemovidos, tamanhoMaximo, defeitosInseridos, tempoTotal,
                            hrLoc, defKloc, yield1, afr) {

    var fd = new FormData();


    fd.append('minutosLOC', minutosLOC);
    fd.append('defeitosRemovidos', defeitosRemovidos);
    fd.append('tamanhoMaximo', tamanhoMaximo);
    fd.append('defeitosInseridos', defeitosInseridos);
    fd.append('tempoTotal', tempoTotal);


    $.ajax({
        url: 'actions/tabelaResumoAction.php',
        type: 'POST',
        data: fd,

        error: function () {
            alert('Erro ao tentar ação!');
        },
        success: function (data) {
            var ret = $.parseJSON(data);

            $(hrLoc).val(ret.hrLoc.toFixed(2));
            $(defKloc).val(ret.defKloc.toFixed(2));
            $(yield1).val(ret.yield.toFixed(2));
            $(afr).val(ret.afr.toFixed(2));

            if(hrLoc == "#horaLOCRea" && defKloc == "#defKLOCRea" && yield == "#yieldRea" && afr ==  "#afrRea") {
                $("#hrLocInput").val(ret.hrLoc.toFixed(2));
                $("#defKLocInput").val(ret.defKloc.toFixed(2));
                $("#yeildInput").val(ret.yield.toFixed(2));
                $("#afrInput").val(ret.afr.toFixed(2));
            }

        },

        processData: false,
        cache: false,
        contentType: false
    });

}

function desabilitaCampos() {
    $("#horaLOCPlan").prop("disabled", true);
    $("#horaLOCRea").prop("disabled", true);
    $("#horaLOCAte").prop("disabled", true);

    $("#defKLOCPlan").prop("disabled", true);
    $("#defKLOCRea").prop("disabled", true);
    $("#defKLOCAte").prop("disabled", true);

    $("#yieldPlan").prop("disabled", true);
    $("#yieldRea").prop("disabled", true);
    $("#yieldAte").prop("disabled", true);

    $("#afrPlan").prop("disabled", true);
    $("#afrRea").prop("disabled", true);
    $("#afrAte").prop("disabled", true);

}