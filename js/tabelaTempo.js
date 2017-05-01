/**
 * Created by ciceromoura on 28/01/17.
 */

$(document).ready(function() {


    desabilitaCampos1();


    $("#atualizarPlanTempo").click(function (e) {
        e.preventDefault();

        var plan;
        var proj;
        var codificacao;
        var revCod;
        var compilacao;
        var teste;
        var posMorte;

        plan = $('#planPlan').val();
        proj = $('#projPlan').val();
        codificacao = $('#codPlan').val();
        revCod = $('#revPlan').val();
        compilacao = $('#compPlan').val();
        teste = $('#testPlan').val();
        posMorte = $('#pmPlan').val();

        requisicaoAjax1(plan, proj, codificacao, revCod, compilacao, teste, posMorte,
                "#totalPlan", "#totalAteP");

        plan = $('#planRea').val();
        proj = $('#projRea').val();
        codificacao = $('#codRea').val();
        revCod = $('#revRea').val();
        compilacao = $('#compRea').val();
        teste = $('#testRea').val();
        posMorte = $('#pmRea').val();

        requisicaoAjax1(plan, proj, codificacao, revCod, compilacao, teste, posMorte,
            "#totalRea", "#totalAteP");

        plan = $('#planAte').val();
        proj = $('#projAte').val();
        codificacao = $('#codAte').val();
        revCod = $('#revAte').val();
        compilacao = $('#compAte').val();
        teste = $('#testAte').val();
        posMorte = $('#pmAte').val();

        requisicaoAjax1(plan, proj, codificacao, revCod, compilacao, teste, posMorte,
            "#totalAte", "#totalAteP");


    });





function requisicaoAjax1(plan, proj, codificacao, revCod, compilacao, teste, posMorte,
                        totalTempo, totalPerc) {

    var fd = new FormData();

    fd.append('plan', plan);
    fd.append('proj', proj);
    fd.append('codificacao', codificacao);
    fd.append('revCod', revCod);
    fd.append('compilacao', compilacao);
    fd.append('teste', teste);
    fd.append('posMorte', posMorte);

    $.ajax({
        url: 'actions/tabelaTempoAction.php',
        type: 'POST',
        data: fd,

        error: function () {
            alert('Erro ao tentar ação!');
        },
        success: function (data) {
            var ret = $.parseJSON(data);

            $(totalTempo).val(ret.tempoMaximo.toFixed(2));
            $(totalPerc).val(ret.tempoPorcentagem.toFixed(2));


            if(totalTempo == "#totalRea") {
                $("#totalTempoInput").val(ret.tempoMaximo.toFixed(2));

            }

        },

        processData: false,
        cache: false,
        contentType: false
    });

}

function desabilitaCampos1() {
    $("#totalPlan").prop("disabled", true);
    $("#totalRea").prop("disabled", true);
    $("#totalAte").prop("disabled", true);
    $("#totalAteP").prop("disabled", true);

}

});