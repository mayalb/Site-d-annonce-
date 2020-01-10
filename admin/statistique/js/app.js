/*$(document).ready(function(){

$.ajax({
 url:"http://localhost/statistique/index.php",
 method:"GET",
 success:function(data){
 	console.log(data);
 	var colis=[];
 	var trajet=[];
 	for(var i in data) {
 		colis.push(data[i].nbr1);
 		trajet.push(data[i].nbr2);

 	}
 	var chartdata={
 		labels:["janvier", "fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre" ],
 		datasets:[
         {

         	labels : 'nombre de colis',
         	backgroundColor:  'rgba(75, 192, 192, 0.2)',
             borderColor: 'rgba(255, 99, 132, 1)', 
               borderWidth: 2 , 
                fill:false ,
                data:colis,
         }
          
         {
         labeles:'nombre de trajet', 
         backgroundColor: 
                'rgba(255, 99, 132, 0.2)',
               borderColor:'rgba(75, 192, 192, 1)',  
                 borderWidth: 2 ,
                 fill:false ,
                 data:trajet,  

         } 
 		]

 	};
 	var ctx = $("#mycanvas"); 
 	var barGraph = new Chart(ctx,{
 		type 'line',
 		data:chartdata
 	}); 

 },
 error:function (data){
 console.log(data);

 }
   });
});


*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function(){

$.ajax({
 url:"http://localhost/statistique/index.php",
 method:"GET",
 success:function(data1){
 	console.log(data1);
 	var chartdata={
 	var tab=[],	
 	var j=0 ,
 	for( j=0;j<2;j++) {
 		tab.push(data1[j]);
 	

 	}
 		datasets:[
         {
 backgroundColor: [ 'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 1)', ],
               borderColor: ['rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 0.2)' ],
               borderWidth: 2 ,
               data:[10,20];
         }

          
         
 		]
 		   [labels:
         'Utilisateur simple',
        
        'Utilisateur premium']

 	};
 	var ctx = $("#myChart1"); 
 	var barGraph = new Chart(ctx,{
 		type 'pie',
 		data:chartdata
 	}); 

 },
 error:function (data1){
 console.log(data1);

 }
   });
});

