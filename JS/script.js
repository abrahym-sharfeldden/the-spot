
$(document).ready(function(){

	var arrowRotate = 0;

  $('.popup-button').rotate(180);
	// Function for the popup button located in the footer.
	
	$('#button').click(function() {
  		$('#popup').slideToggle();
	});	
	// Function for the arrow image to rotate once clicked.

	$("#arrow").click(function(){
		arrowRotate = arrowRotate + 180;

		$(this).rotate(arrowRotate);
	})
	// Function for the popup button located in the header mobile version.

	$(".dropbtn").click(function() {
    	$('.dropdown-content').toggle('slow',function(){
    		//animation complete.
    	});
	});

  if($(window).width() <= 880){
    $(".popup-main").css("display","none")
    $(".popup-media").css("display","block")
  }

  if($(window).width() <= 768){
    $(".navbar-main").css("display","none")
    $(".navbar-media").css("display","block")
  }

// $(".image-container-2").click(function(){     
//     if($('.hover:visible').length){
//         $('.hover').hide();
//       }else {
//         $('.hover').show();        
//       }
//     });
    $(".image-container-2").click(function(){
      $(this).find(".hover").toggle();        
    });
 });

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
// function myFunction() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }

// // Close the dropdown if the user clicks outside of it
// window.onclick = function(event) {
//   if (!event.target.matches('.dropbtn')) {

//     var dropdowns = document.getElementsByClassName("dropdown-content");
//     var i;
//     for (i = 0; i < dropdowns.length; i++) {
//       var openDropdown = dropdowns[i];
//       if (openDropdown.classList.contains('show')) {
//         openDropdown.classList.remove('show');
//       }
//     }
//   }
// }