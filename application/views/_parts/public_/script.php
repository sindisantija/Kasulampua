<script src="<?= base_url()?>assets/js/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/chartjs/Chart.js"></script>

<script>

	loadData($('#catName li:first-child input').val(), "<?= base_url();?>public_/data/fetch_post", "#resultPost");
	loadData($('#catName li:first-child input').val(), "<?= base_url();?>public_/data/fetch_idk", "#idkResult");

	// Init var
	var trigger1 = 0;
	var trigger2 = 0;

	// Search Button
	$('#searchButton').on('click', function(){
		if(trigger1 == 0){
			$('.cs-searchbox').css({'width':'200px', 'background-color':'rgba(255,255,255,0.4)'});
			trigger1 = 1;
		}
		else {
			$('.cs-searchbox').css({'width':'0px', 'background':'transparent'});
			trigger1 = 0;
		}
	});

	//Slide box
	$('#slideBox').on('click', function(){
		if(trigger2 == 0){
			$('.slide-box').css('bottom','0');
			trigger2 = 1;
		}
		else {
			$('.slide-box').css('bottom','-60%');
			trigger2 = 0;
		}
	});

	// About us
	$('.about-checked').on('click', function(){
		var value = $(this).val()
		// console.log(value);
		if(value == 1){
			$('#geografis').css('display', 'block');
			$('#about').css('display', 'none');
			$('#people').css('display', 'none');
		}
		else if (value == 2){
			$('#geografis').css('display', 'none');
			$('#about').css('display', 'block');
			$('#people').css('display', 'none');
		}
		else {
			$('#geografis').css('display', 'none');
			$('#about').css('display', 'none');
			$('#people').css('display', 'block');
		}
	});

	// First Active tab 
	$('#catName li:first').addClass('active-tab');

	// Active tab at Halaman Data
	$('.data-tab').on('click', function(e){
		$('.data-tab').not(this).removeClass("active-tab");
		$(this).toggleClass("active-tab");
	});

	// fetch post ajax categories 
	$('.data-tab').on('click', function() {
		var id = $(this).find('input').val()
		var url = "<?= base_url();?>public_/data/fetch_post";
		var target = "#resultPost";
		loadData(id, url, target);
	});

	$('.data-tab').on('click', function() {
		var id = $(this).find('input').val()
		var url = "<?= base_url();?>public_/data/fetch_idk";
		var target = "#idkResult";
		loadData(id, url, target);
	});

	// Initial fetch Post Ajax
	function loadData(id, url, target) {
		$.ajax({
			// url : "<?php //echo base_url();?>public_/data/fetch_post",
			url : url,
			method : "POST", 
			data : {id:id},
			success:function(data){
				$(target).html(data);
				// $('#idkResult').html(data['idk']);
			},
			error:function(e){
				alert('Gagal Dapat Data');
			}
		});
	}

	// Chart JS With Looping
	for(var i=1; i<=$('.graph').length; i++){
		var ctx = document.getElementById("myChart"+i).getContext('2d');
		var myChart = new Chart(ctx, {
		type : 'bar',
		data : {
			labels : ["Sulawesi Utara", "Sulawesi Tengah", "Sulawesi Selatan", "Sulawesi Tenggara", "Gorontalo", "Sulawesi Barat", "Maluku","Maluku Utara", "Papua", "Papua Barat", "Kalimantan Selatan", "Kalimantan Barat", "Kalimantan Tengah", "Kalimantan Timur"],
			datasets : [{
				label : '# of Votes',
				data : [12, 9, 3, 23 ,2 , 3, 2, 3, 4, 5, 6, 7, 10, 15, 7, 8, 19],
				backgroundColor : [
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 99, 132, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 159, 64, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(54, 162, 235, 0.2)'
				],
				borderColor : [
					'rgba(255, 99, 132, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(153, 102, 255, 1)'
				],
				borderWidth : 1
			}]	
		},
		options : {
			legend :{
				display : false
			},
			scales: {
				xAxes: [{
					gridLines: {
						display:false
					},
					stacked : false,
					begitAtZero : true,
					ticks : {
						autoSkip:false,
						maxRotation: 90,
						minRotation: 90
					}
				}],
				yAxes: [{
					gridLines: {
						display:false
					}   
				}]
			}
		}
	});
	}

</script>
</html>

