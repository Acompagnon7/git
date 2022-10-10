$(document).ready(function(){
    console.log($(".titre"))
    $(".titre").html("YEAAAAAAAAAH")
    
    $(".p").html("The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.")
    
    $("p:last").css('color', 'red');
    
    $(".p").css({'color': 'yellow', 'background-color': 'cyan'});

    /*$("#nbr2").change(function(){

        parseInt($('#nbr').val());

        console.log($('#nbr').val());

    $("#test").click(function(){
    let result = parseInt($('#nbr1').val()) + parseInt($('#nbr2').val()) ;

    $("#resultat").html(result);
    })*/

    let maj = $("#maj").html();
    $("#maj").html(maj.toUpperCase());

    $("#liste").append("<li></li>");

    let stagiaire = ["Marc, Gerome, Antoine, Jean Pierre, Paul, Eric"];

    for ( let index = stagiaire.length - 1; index >= 0; index--)
    {
        $("#liste").append("<li>" + stagiaire[index] + "</li>")
    }

    for ( let index = 0; index < stagiaire.length; index++)
{
	$("#liste").append("<li>" + stagiaire[index] + "</li>")
}
})//})

//parseInt($('#nbr').val())
