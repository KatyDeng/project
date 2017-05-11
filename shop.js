

//creating forms and adding id "from" +k
var form = document.createElement('form');
var getTable = document.getElementById('test');
getTable.appendChild(form);
form.action="order.php";
form.method ="post";
var newTable = document.createElement('table');
form.appendChild(newTable);
newTable.className="shopTable"


	

for (var i= 0; i<2; i++){
	var rows = document.createElement('tr');
	newTable.appendChild(rows);
	rows.id="tr"+i;

}

//for Row 1
	var getRows=document.getElementById('tr0');
	
	for(k=0;k<5;k++){	
		var cells=document.createElement('td');	
		var image=document.createElement('img');
		image.src ="product"+(k+1)+".jpg";
		//image.style.height = "350px";
		cells.appendChild(image);
		getRows.appendChild(cells);
		cells.id="td"+k;

	}

	//for row2 
	var getRows2=document.getElementById('tr1');
	var productInfo = [["Classic", 150],
					   ["Golden Leaf", 200],
					   ["Class of Love", 100],
					   ["Love of Pearl", 250],
					   ["Soft Blush", 100]];
	

	for(k=0;k<5;k++){	
		var cells=document.createElement('td');	
		getRows2.appendChild(cells);
		cells.id="checkOutCells"+k;
		

		// create inputs inside form 
		for(z= 0; z<2;z++){
			var tags= document.createElement('div');
			cells.appendChild(tags);
			var inputs = document.createElement("input");
			cells.appendChild(inputs);
			if(z==0){
				tags.innerHTML="Product Name: " +productInfo[k][z];
			}else{
				tags.innerHTML="$ " + productInfo[k][z];
			}//end if/else	
	
			inputs.type="hidden";
			inputs.name = 'productInfo[]';
			inputs.value = productInfo[k][z];
		


	
		}//end for the for loop (z)
		var amount = document.createElement('input');
		cells.appendChild(amount);
		amount.type="number";
		amount.name="amount"+k;
		amount.value=0;
	}//end in row2
	   
	   var div = document.createElement('div');
	   form.appendChild(div);
	   div.id="userDiv"

	   var f = document.createElement('input');
	   var world= document.createElement("div");
	   div.appendChild(world);
	   world.id="userF";
	   world.innerHTML="First Name"
	   div.appendChild(f);
	   f.type="text";
	   f.name="f_name"
	   f.required=" ";



	   var l = document.createElement('input');
	   var world_l= document.createElement("div");
	   div.appendChild(world_l);
	  	world_l.id="userL";
	  	world_l.innerHTML="Last Name"
	   div.appendChild(l);
	   l.type="text";
	   l.name="l_name"
	   l.required=" ";

	   var a = document.createElement('input');
	   var address= document.createElement("div");
	   div.appendChild(address);
	  	address.id="userAdd";
	  	address.innerHTML="Address"
	   div.appendChild(a);
	   a.id="add_box";
	   a.type="text";
	   a.name="address"
	   a.required=" ";

	    var c = document.createElement('input');
	   var city= document.createElement("div");
	   div.appendChild(city);
	  	city.id="userCity";
	  	city.innerHTML="City"
	   div.appendChild(c);
	   c.id="city_box";
	   c.type="text";
	   c.name="city"
	   c.required=" ";

	 


	    

		var s = document.createElement('input');
	   	var state= document.createElement("div");
	   div.appendChild(state);
	  	state.id="userState";
	  	state.innerHTML="State";
	   div.appendChild(s);
	   s.id="state_box";
	   s.type="text";
	   s.name="state"
	   s.required=" ";
	   
   		var z = document.createElement('input');
	   	var zip= document.createElement("div");
	   div.appendChild(zip);
	  	zip.id="userZip";
	  	zip.innerHTML="Zipcode"
	   div.appendChild(z);
	   z.id="city_box";
	   z.type="text";
	   z.name="zip"
	   z.required=" ";
 
	  
	  var e = document.createElement('input');
	   	var email= document.createElement("div");
	   div.appendChild(email);
	  	email.id="userEmail";
	  	email.innerHTML="Email";
	   div.appendChild(e);
	   e.id="city_box";
	   e.type="text";
	   e.name="email"
	   e.required=" ";

	   var b =document.createElement('br');
	   div.appendChild(b);



// button for final submittion 
	var button = document.createElement('input');
	div.appendChild(button);
	button.type ="submit";
	button.value="Check out"
	button.id="checkOutButton"
