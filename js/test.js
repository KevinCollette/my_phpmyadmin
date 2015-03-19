$("#btntest").click(function()
  {
    $.ajax({
       url : '../includes/afftab.php',
       type : 'GET',
       dataType : 'html',
       success : function(code_html, statut){
           $(code_html).appendTo("#testtest"); 
         },

       error : function(resultat, statut, erreur){
         alert("error");
       },

       complete : function(resultat, statut){

  }

    });
   
});