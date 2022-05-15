<!DOCTYPE html>

<html>
<head>
    <title> Order Page </title>
  <style>
    
    /*  create line boarder about the table  */
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    
    .stocktable, h1, h3 {
        
        text-align: center;
        margin-left:15%;
    
    }
   
    ul.horizontal li {
      list-style-type: none;
      display:inline-block;	
    }

    
    ul.navbar {
      position: fixed;  /* postion is set to fixed*/
      top: 0;           /* postion to top most*/
      width: 100%;      /* navbar to full width of page */
      margin: 0;
      padding: 0;	
      background-color: rgb(0, 38, 73);    
    }

    ul.navbar li {
      list-style-type: none;
      display:inline-block;	
    }

    ul.navbar li a {			
      display:block;
      padding: 14px 16px;
      color:white;
      text-align:center;
      text-decoration: none;
    }  

           /*  this is to highlight navBar, bulletpoint  */
    ul.navbar li a:hover {
      background-color: rgb(124,33,40); 
    }  

       /*  this is to highlight the table row   */
    tr.row:hover {
      background-color: rgb(0,255,0); 
    }
        
    /* 1. for the hidden and tooltip popup*/   
    /*
    .hidden{
      display: none;
      position: absolute; 
      z-index: 100;
      border: 1px;
      background-color: white;
      border: 1px solid green;
      padding: 3px;
      color: green; 
      top: 20px; 
      left: 50px;
    }
    
    .stockname:hover span.hidden{
      display:block;
    }
    */
    
    
    /* 2. for the hidden and tooltip popup  */     
    .hidden{
	    display:none;
      position: fixed; 
    }
    
    .stockname:hover  span.hidden {
	    display:inline;
	    background-color: white;
      border: 1px solid green;
      color: green; 
	    margin-left: 150px;
      padding: 3px;
    }

 
    

</style>
</head>
<body>
  
  <a name="top"></a>    <!--  can use name="top" OR id="top" -->
  

  
  <br><br>
  
  <h1> KULLANICILAR </h1>

  
  
  

  <form id="stockForm">
  <table id = "stocktable" class = "stocktable" style="width:60%">
    <tr style="background-color:powderblue;">
    
      <th> İd </th>
      <th> Ad </th>
      <th> Soyad </th>
      <th> Email </th>
      <th> Şifre </th>
      <th> Aktiflik </th>
    </tr>
    
    
    
    
    
      <tr class = "row">
        <td> 
          <input type="checkbox" id="chk1" name="stock1" value="apple">
          <label for="stock1"></label>
           </td>
        <td> 
          <input type="number" id="quan1" name="apple" min="0" max="10" onblur="textBlur()" disabled>
          </td>
        <td class="stockname">AAPL
          <span class="hidden">Apple Inc. is an American multinational technology company that specializes in consumer electronics, software and online services.</span>
          </td>
        <td> 170.33 </td>
        
        <td> 2,610 </td>
          <td> 1</td>
      </tr>
    
  
    
    
    <tr class = "row">
      <td> 
        <input type="checkbox" id="chk2" name="stock2" value="microsoft">
        <label for="stock2"></label>
        </td>
      <td> 
        <input type="number" id="quan2" name="microsoft" min="0" max="10" disabled>
      </td>
      <td class="stockname"> MSFT
        <span class="hidden">Microsoft Corporation is an American multinational technology corporation which produces computer software, consumer electronics, personal computers, and related services. </span>
        </td>   
      <td> 288.49 </td>
      <td> 2,170 </td>
      <td> 1</td>
    </tr>
    
    <tr class = "row">
      <td> 
        <input type="checkbox" id="chk3" name="stock3" value="tesla">
        <label for="stock3"></label>
        </td>
      <td> 
        <input type="number" id="quan3" name="tesla" min="0" max="10" onblur="textBlur()" disabled>
         </td>
      <td class="stockname"> TSLA 
        <span class="hidden">Tesla, Inc. is an American electric vehicle and clean energy company based in Austin, Texas </span>
        </td> 
      <td> 918.40 </td>
      <td> 922 </td>
      <td> 1</td>
    </tr>
    
    <tr class = "row">
      <td> 
        <input type="checkbox" id="chk4" name="stock4" value="amazon">
        <label for="stock4"></label>
        </td>
      <td> 
        <input type="number" id="quan4" name="amazon" min="0" max="10" onblur="textBlur()" disabled>
        </td>
      <td class="stockname"> AMZN 
        <span class="hidden">Amazon.com, Inc. is an American multinational technology company which focuses on e-commerce, cloud computing, digital streaming, and artificial intelligence. </span>
        </td> 
      <td> 2799.72 </td>
      <td> 1,420 </td>
      <td> 1</td>
    </tr>
    
  </table>
  <br>
  <input id="submitbtn" type="submit" value="Submit">
  <input type="reset">
  </form>


</body>


<script>

 
   
  // add event listeners for check boxes
  for (let i = 1; i <= 4; i++) {
    let id = 'chk' + i;
    document.getElementById(id).addEventListener("click", processCheck);
  }
  
  // add event listener for submit button
  document.getElementById('stockForm').addEventListener("submit", summarize);
  
  
  // Enable/Disable numeric input when the user checks or unchecks a checkbox
  function processCheck() {
    let quan = this.id.replace('chk','quan');
	  let numInput = document.getElementById(quan);

    if (this.checked){
      document.getElementById(quan).disabled= false;
      numInput.value = 1;
    } 
    else {
      document.getElementById(quan).disabled= true;
      numInput.value = "";
    }
  }


  // add event listeners for input boxes
  let input2 = document.getElementsByTagName('input');
  for (let i of input2) {
    if (i.id.includes('quan')){
      document.getElementById(i.id).addEventListener('blur',textBlur);
    }
  }
  //uncheck the checkbox and clear 
  function textBlur(){
    //get id of quantity of the textbox
    //let quan = document.getElementById('quan1').id;
    let quan = this.id;

    //get value in the textbox
	  let numInput = this.value;
    
    //if the quanity is blank or 0, uncheck and clear textbox
    if (numInput == 0 || numInput == ""){
      document.getElementById(quan).disabled= true;
      document.getElementById(quan).value = "";
      let chk = document.getElementById(quan).id.replace('quan','chk');
      document.getElementById(chk).checked = false;
    }  
  }
  
  // generate an alert summarizing the order
  function summarize() {
    let summary = '';
	  let table = document.getElementById("stocktable");

    for (let i = 1; i <= 4; i++) {
            // let id = 'chk' + i;
            // if (document.getElementById(id).checked){
            //   summary = summary + row.cells[2].innerText + '\n';          
            // }
            //alert(table.rows[i].cells[0].children[0].checked);
            if (table.rows[i].cells[0].children[0].checked){            
              summary = summary + table.rows[i].cells[1].children[0].value + '  x  ' + table.rows[i].cells[2].innerText + '\n';  
            }
          }
    alert('You Ordered: \n' + summary);
	  }
    

  </script>

</html>