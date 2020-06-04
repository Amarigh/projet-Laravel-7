
// Example starter JavaScript for disabling form submissions if there are invalid 


$(document).ready(function(){


//  image profile  

$("#imgprofil").hide();
$("#modifierprofil").click(function () {

    $("#modifierprofil").hide();
    $("#imgprofil").show();

});

// information personnels


// $("div #inputformation").prop("disabled", true);


//  les experiences

$("#affichestage,#afficheformation,#afficheemploi,#afficheecole,#nomdiplome,#secteur_travail").hide();


$("*#diplome").click(function(){
  $("#nomdiplome").toggle();
 
});

$("*#entreprise").hide();

$("select.entreprise").change(function () {
    var langage = $(this).children("option:selected").val();

   if (langage == 'autre') {

       $("*#entreprise").show();


    }
   else $("*#entreprise").hide();
});






$("#secteur").click(function(){
  $("#secteur_travail").toggle();
  $("#afficheformation,#afficheemploi,#afficheecole,#affichestage,*#entreprise").hide();
  // $("#").hide();
});


$("#stage").click(function(){
    $("#affichestage").toggle();
    $("#afficheformation,#afficheemploi,#afficheecole,#secteur_travail,*#entreprise").hide();
    // $("#").hide();
  });


$("#formation").click(function(){
    $("#afficheformation").toggle();
    $("#affichestage,#afficheemploi,#afficheecole,#secteur_travail,*#entreprise").hide();

  });



$("#emploi").click(function(){
    $("#afficheemploi").toggle();
    $("#affichestage,#afficheformation,#afficheecole,#secteur_travail,*#entreprise").hide();

  });


$("#ecole").click(function(){
    $("#afficheecole").toggle();
    $("#affichestage,#afficheformation,#afficheemploi,#secteur_travail,*#entreprise").hide();

  });




});




// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }

//         form.classList.add('was-validated');
        
      
//       }, false);
    

//     });
//   }, false);



// })();












  


  

