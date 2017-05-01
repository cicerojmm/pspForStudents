/**
 * Created by ciceromoura on 28/01/17.
 */
$(document).ready(function() {


    desabilitaCampos2();

    $("#atualizarPlanDefeitos").click(function (e) {
        e.preventDefault();

        var plan;
        var proj;
        var codificacao;
        var revCod;
        var compilacao;
        var teste;

        //Defeitos Inseridos
        plan = $('#planPlanDI').val();
        proj = $('#projPlanDI').val();
        codificacao = $('#codPlanDI').val();
        revCod = $('#revPlanDI').val();
        compilacao = $('#compPlanDI').val();
        teste = $('#testPlanDI').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalPlanDI", "#totalAtePdi");

        plan = $('#planReaDI').val();
        proj = $('#projReaDI').val();
        codificacao = $('#codReaDI').val();
        revCod = $('#revReaDI').val();
        compilacao = $('#compReaDI').val();
        teste = $('#testReaDI').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalReaDI", "#totalAtePdi");

        plan = $('#planAteDI').val();
        proj = $('#projAteDI').val();
        codificacao = $('#codAteDI').val();
        revCod = $('#revAteDI').val();
        compilacao = $('#compAteDI').val();
        teste = $('#testAteDI').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalAteDI", "#totalAtePdi");


        //Defeitos Removidos
        plan = $('#planPlanDR').val();
        proj = $('#projPlanDR').val();
        codificacao = $('#codPlanDR').val();
        revCod = $('#revPlanDR').val();
        compilacao = $('#compPlanDR').val();
        teste = $('#testPlanDR').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalPlanDR", "#totalAtePDR");

        plan = $('#planReaDR').val();
        proj = $('#projReaDR').val();
        codificacao = $('#codReaDR').val();
        revCod = $('#revReaDR').val();
        compilacao = $('#compReaDR').val();
        teste = $('#testReaDR').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalReaDR", "#totalAtePDR");

        plan = $('#planAteDR').val();
        proj = $('#projAteDR').val();
        codificacao = $('#codAteDR').val();
        revCod = $('#revAteDR').val();
        compilacao = $('#compAteDR').val();
        teste = $('#testAteDR').val();

        requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
            "#totalAteDR", "#totalAtePDR");



    });



});

function requisicaoAjax2(plan, proj, codificacao, revCod, compilacao, teste,
                         totalTempo, totalPerc) {

    var fd = new FormData();


    fd.append('plan', plan);
    fd.append('proj', proj);
    fd.append('codificacao', codificacao);
    fd.append('revCod', revCod);
    fd.append('compilacao', compilacao);
    fd.append('teste', teste);


    $.ajax({
        url: 'actions/tabelaDefeitosAction.php',
        type: 'POST',
        data: fd,

        error: function () {
            alert('Erro ao tentar ação!');
        },
        success: function (data) {
            var ret = $.parseJSON(data);

            $(totalTempo).val(ret.tempoMaximo.toFixed(2));
            $(totalPerc).val(ret.tempoPorcentagem.toFixed(2));


            if(totalTempo == "#totalReaDI") {
                $("#totalDefInsInput").val(ret.tempoMaximo.toFixed(2));

            }

            if(totalTempo == "#totalReaDR") {
                $("#totalDefRevInput").val(ret.tempoMaximo.toFixed(2));

            }

        },

        processData: false,
        cache: false,
        contentType: false
    });

}

function desabilitaCampos2() {
    $("#totalPlanDI").prop("disabled", true);
    $("#totalReaDI").prop("disabled", true);
    $("#totalAteDI").prop("disabled", true);
    $("#totalAtePdi").prop("disabled", true);


    $("#totalPlanDR").prop("disabled", true);
    $("#totalReaDR").prop("disabled", true);
    $("#totalAteDR").prop("disabled", true);
    $("#totalAtePDR").prop("disabled", true);

}