@extends('app')

@section('contentheader_title')

{!! Breadcrumbs::render('dashboard') !!}

@endsection

@section('main-content')

<div class="row">

	<div class="col-md-4">
		Total Afiliados por Estado
		@include('dashboard.affiliates_by_state')	
	</div>

	<div class="col-md-8">
		Total Aportes por Gestión
		@include('dashboard.contributions_by_management')
		
	</div>

</div>

<div class="row">

	<div class="col-md-4">
	Total Afiliados por Tipo
	@include('dashboard.affiliates_by_type')
		
	</div>

	<div class="col-md-8">
	Total Aportes Voluntarios de la Gestión
		
	</div>

</div>

<div class="row">

	<div class="col-md-4">
	Total Afiliados por Distrito
	
	</div>

	<div class="col-md-8">
	Total Trámites de la Gestión
		
	</div>

</div>
<div class="row">


	<div class="col-md-12">
	Total complemento economico de la Gestión
		
	</div>
</div>
<div class="row">
	<div class="col-md-4">
	Total Complemento economico por tipos
		
	</div>
	<div class="col-md-4">
	Total Complemento economico por tipos de modalidades
		
	</div>
	<div class="col-md-4">
	Total Complemento economico por departamentos
		
	</div>

</div>

@endsection
@push('scripts')

<script type="text/javascript">

	
	

	


	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var pieDistritoData= {
		labels: {!!json_encode($list_affiliateByDisctrict[0])!!},
		datasets: [
		{
			data: {!!json_encode($list_affiliateByDisctrict[1])!!},

			backgroundColor: [
				"#F7464A",
				"#46BFBD",
				"#FDB45C",
				"#949FB1",
				"#4D5360",
				"#D8BFD8",
				"#008080",
				"#A52A2A",
				"#6495ED",
				"#DC143C",
				"#8B008B",
				"#2F4F4F",
				"#00BFFF",
				"#1E90FF",
				"#D2B48C",
				"#228B22",
				"#FFFAF0",
				"#E9967A",
				"#8FBC8F",
				"#F4A460",
				"#4682B4"
			],
			hoverBackgroundColor: [
				"#FF5A5E",
				"#5AD3D1",
				"#FFC870",
				"#A8B3C5",
				"#616774",
				"#E1CFE1",
				"#0E9696",
				"#A44444",
				"#759EEB",
				"#DA3254",
				"#616774",
				"#616774",
				"#8F258F",
				"#2994FF",
				"#D1B999",
				"#259C25",
				"#F6F3EC",
				"#E9967A",
				"#94BD94",
				"#F6A965",
				"#528AB7"
			]
		}]
	};

    			

    				var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    				var barAporteVoluntario = {
    					labels : {!! json_encode($total_voluntayContributionByMonth[0]) !!},
    					datasets : [

    					{
            label: "My First dataset",
    						backgroundColor: [
    						                'rgba(255, 99, 132, 0.2)',
    						                'rgba(54, 162, 235, 0.2)',
    						                'rgba(255, 206, 86, 0.2)',
    						                'rgba(75, 192, 192, 0.2)',
    						                'rgba(153, 102, 255, 0.2)',
    						                'rgba(255, 159, 64, 0.2)'
    						            ],
    						            borderColor: [
    						                'rgba(255,99,132,1)',
    						                'rgba(54, 162, 235, 1)',
    						                'rgba(255, 206, 86, 1)',
    						                'rgba(75, 192, 192, 1)',
    						                'rgba(153, 102, 255, 1)',
    						                'rgba(255, 159, 64, 1)'
    						            ],
            borderWidth: 1,
    						data : {!! json_encode($total_voluntayContributionByMonth[1]) !!}
    					}
    					]

    				}

    				var options = {
    					responsive: true,
    					tooltipTemplate: " <%=label%>: <%= value + ' Bs' %>",
    					legend: {
    					        display: true
    					    },
    				};



        //for complement economic

        var barChartDataSemestre = {
        	type:'bar',
        	data:{
        		labels : {!! json_encode($economic_complement_bar[0]) !!},
        		datasets : [
        		{
        			label: 'Hola',
        			backgroundColor: [
        			             'rgba(54, 162, 235, 0.2)'
        			             ],
        			borderColor:[
        				'rgba(54, 162, 235, 1)'
        			],
        			borderWith:1,
        			data : {!! json_encode($economic_complement_bar[1]) !!}
        		}
        		]
        	}
        	
        }
        var data_pie_type={
    		  type: 'pie',
    		  data: {
    		    labels: {!!json_encode($economic_complement_pie_types[0])!!},
    		    datasets: [{
    		      backgroundColor: [
    		        "#f1c40f",
    		        "#3498db",
    		        "#2ecc71",
    		        "#9b59b6",
    		        "#e74c3c",
    		        "#34495e",
    		        "#95a5a6"
    		      ],
    		      data: {!!json_encode($economic_complement_pie_types[1])!!}
    		    }]
    		  },
    		  responsive:true,
    		  
    		};
        

    		var dataBar = {
    		    labels: {!!json_encode($economic_complement_bar[0])!!},
    		    datasets: [
    		        {
    		            label: "Total Tramites",
    		            borderWidth: 1,
    		            data: {!!json_encode($economic_complement_bar[1])!!}
    		        }
    		    ]
    		};

    		var pieModData = {
    			labels: {!!json_encode($economic_complement_modalities_types[0])!!},
    			datasets: [
    			{
    				data: {!!json_encode($economic_complement_modalities_types[1])!!},
    				backgroundColor: [
    					"#FF6384",
    					"#36A2EB",
    					"#FFCE56"
    				],
    				hoverBackgroundColor: [
    					"#FF6384",
    					"#36A2EB",
    					"#FFCE56"
    				]
    			}]
    		};
    		var pieCitiesData={
    			labels: {!!json_encode($economic_complement_cities[0])!!},
    			datasets: [
    			{
    				data: {!!json_encode($economic_complement_cities[1])!!},
    				backgroundColor: [
    					"#f1c40f",
    					"#3498db",
    					"#2ecc71",
    					"#9b59b6",
    					"#e74c3c",
    					"#34495e",
    					"#95a5a6"
    				],
    				hoverBackgroundColor: [
    					"#f1c40f",
    					"#3498db",
    					"#2ecc71",
    					"#9b59b6",
    					"#e74c3c",
    					"#34495e",
    					"#95a5a6"
    				]
    			}]
    		}
    		var optionsBar={
					responsive: true,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
							}
						}]
					}
				};

        window.onload = function(){
        

        	var ctx = document.getElementById("pie-tipo").getContext("2d");
        	window.myPie = new Chart(ctx, {
        		type: 'pie',
        		data: pieData,
        		options: options,

        	});

      

        	var ctx = document.getElementById("pie-distrito").getContext("2d");
        	window.myPie = new Chart(ctx,{
        	    type: 'pie',
        	    data: pieDistritoData,
        	    options: options
        	});

    		var ctx = document.getElementById("bar-AporteVoluntario").getContext("2d");
    		window.myBar = new Chart(ctx,{
    			type:'bar',
    			data:barAporteVoluntario,	
    		});
    		/* Faltan estas graficas del dhasboard general

    		var ctx = document.getElementById("bar-tramites").getContext("2d");
    		window.myBar = new Chart(ctx).Bar(barTramites, {responsive : true});
    		*/
    		// for complement economic

    		/*var ctx = document.getElementById("bar-semestre").getContext("2d");
    		window.myBar = new Chart(ctx).Bar(barChartDataSemestre, {responsive : true});
*/
			
    		var ctx = document.getElementById("pie-eco-com-type").getContext('2d');
    		window.myChart = new Chart(ctx, data_pie_type );
			var ctx = document.getElementById("bar-semestre").getContext('2d');

			var myBarChart = new Chart(ctx, {
				type: 'bar',
				data: dataBar,
				options: optionsBar
			});

    		var ctx = document.getElementById("pie-eco-com-mod-type").getContext('2d');
    		var pieModType=new Chart(ctx,{
    			type:'pie',
    			data:pieModData
    		});
    		var ctx = document.getElementById("pie-eco-com-cities").getContext('2d');
    		var pieCities=new Chart(ctx,{
    			type:'pie',
    			data:pieCitiesData
    		});
//			window.mybar=new Chart(ctx,barChartDataSemestre);
	
    	}

    </script>

    @endpush
