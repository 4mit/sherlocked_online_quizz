
      $(function(){
          $("#head-title").typed({
            strings: ["The Starting of the journey  ", "Lets Begin the the Journey  " ,"It may be Entimitating ","But this is gonna be exciting "],
            typeSpeed: 70,
            loop: true,
            startDelay: 100
          });
		  
		  
		  $("#about-text").typed({
            strings: ["Sherlock Holmes is a fictional private detective created by British author Sir Arthur Conan Doyle. Known as a consulting detective ,in the stories, Holmes is known for a proficiency with observation,"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
		  
      });
	  $('#logo_img').hover(function(e){
		  $('#logo_img').css({
			  transform:'scale(1.1)',
			  transition:'.4s'
			  })
		  },function(e){
			$('#logo_img').css({
			  transform:'scale(1)'
			 })	  
	  });
  
     