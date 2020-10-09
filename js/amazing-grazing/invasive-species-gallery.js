/* JavasScript contains files needed to update the invasive species 
   gallery with the right information & the right graph */

$(function() {
	function aos_init() {
				AOS.init({
				  duration: 1000,
				  once: true
				});
			  }
			  
	$(window).on('load', function() {
		$.ajax({
			type: "POST",
			dataType: 'json',
			url: 'php/invasive-species-gallery.php',
			data: {},
			success: function(data) {
				//console.log(data.plants);
				document.getElementById('animals-content').innerHTML = data.animals;
				document.getElementById('plants-content').innerHTML = data.plants;
				
				/* Initiates owl carousel */
				$('.carousel-species').owlCarousel({
					center: true,
					loop: true,
					items:1,
					margin: 30,
					stagePadding: 0,
					mouseDrag: true,
					nav: true,
					navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
					responsive:{
						0:{
							items: 1
						},
						600:{
							items: 2
						},
						1000:{
							items: 3
						},
						1600:{
							items: 4
						}
					}
				});
				
				/* Initiates the animations required for the sort */
				var portfolioIsotope = $('.sort-species-container').isotope({
				  itemSelector: '.sort-species-item'
				});

				$('#sort-species-flters li').on('click', function() {
				  $("#sort-species-flters li").removeClass('filter-active');
				  $(this).addClass('filter-active');

				  portfolioIsotope.isotope({
					filter: $(this).data('filter')
				  });
				  aos_init();
				});
				
				$('.filter-active').click(); // trigger the click of the filter
				
				$('.venobox').venobox({
					'share': false
				  });
				
				aos_init();
			}, 
			error: (error) => {
				console.log(JSON.stringify(error));
			}
		});
		
		
	});
	

});


