


<html>

<head>
  <title>Form Filling</title>
  <style>
  body{
	        background-image: url("https://media.istockphoto.com/photos/darkness-picture-id136851159?b=1&k=20&m=136851159&s=170667a&w=0&h=Frk0s3pdGNuOX_1IkkcgwWK2GVXBsu19_-Ir-JWqJko=");
			background-repeat: no-repeat;
			background-size: 100%;
			text-align: center;
			font-size: 22px;
			color:white;
			
		}
		h1{
			color: red;
			font-size: 60px;
			font-family: cursive;
			text-decoration:underline;
		}
		.form1{
			background-color:rgb(2, 27, 46);
			padding: 24px;
			margin-left:420px;
			position: absolute;
			align:center;
			border:2px solid black;
			border-radius: 15px;
		}
		input{
			width: 330px;
			height: 30px;
			border-radius: 7px;
			text-align: center;
			background-color:lightgrey;
		}
		input[type="text"]{
			font-size: 20px;
			background-color:lightgrey;
		}
		input:focus{
			background-color:rgb(247, 141, 64);
		}
    #r2:focus{
      background-color:rgb(247, 141, 64);

    }
		
		button{
			align:center;
			font-size: 20px;
			height: 40px;
			margin-top:40px;
			background-color: #00FF7F;

		}
		td{
			color:white;
			font-size:25;
		}
		#r3{
			background-color:lightgrey;
		}
		#r3:focus{
			background-color:rgb(75, 204, 195);
		}
  </style>
  <script>
    function validate() {
        var name = document.forms["RegForm"]["Name"];
        var email = document.forms["RegForm"]["EMail"];
        var phone = document.forms["RegForm"]["Telephone"];
        var frnd = document.form["RegFrom"]["FPhone"];
        var date = document.forms["RegForm"]["Date"];
        var id = document.forms["RegForm"]["ID"];

        var address = document.forms["RegForm"]["Address"];
        var landmark = document.forms["RegForm"]["Landmark"];
        var phoneno = /^\d{10}$/;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        
  
        if (name.value == "") {
            window.alert("Please enter your name.");
            name.focus();
            return false;
        }
  
        if (address.value == "") {
            window.alert("Please enter your address.");
            address.focus();
            return false;
        }
        if (landmark.value == "") {
            window.alert(
              "enter valid landmark");
            landmark.focus();
            return false;
        }
        if (!(phone.value.match(phoneno))) {
            window.alert(
              "Please enter your telephone number.");
            phone.focus();
            return false;
        }
        if (!(frnd.value.match(phoneno))) {
            window.alert(
              "Please enter your telephone number.");
            phone.focus();
            return false;
        }
  
        if (email.value.indexOf('@')<=0) {
            window.alert(
              "Please enter a valid e-mail address.");
            email.focus();
            return false;
        }
        var ToDate = new Date();
        if (new Date(date).getTime() >= ToDate.getTime()) {
            window.alert("The Date must be Bigger or Equal to today date");
            date.focus();

            return false;
        }
    
  
        return true;
    }
</script>


</head>
<body>
	<div class="main">
		<h1>Akash srp</h1>
		<div class="form1" float="center">
			<form align="center" name="RegForm" method="post" action="insert.php" onsubmit="return validate()">
      <table align="center" cellspacing="5" cellpadding="7">
            <tr>
            <td> Enter Name :</td>
            <td> <input id="r1" type="text" name="Name" size="48"> </td>
            </tr>
            <tr>
            <td> Enter Address :</td>
            <td><textarea id="r2" name="Address" rows="5" cols="40"></textarea>
            </td>
            </tr>
            <tr>
            <td>Enter Area</td>
            <td><select type="text" value="" name="Landmark">
                <option>ananthapur</option>
                <option>chittor</option>
                <option>east Godavari</option>
                <option>guntur</option>
                <option>kadapa</option>
                <option>krishna</option>
                <option>kurnool</option>
                <option>nellore</option>
                <option>prakasam</option>
                <option>srikakulum</option>
                <option>visakhapatnam</option>
                <option>west Godavari</option>
            </td></tr>
            <tr>
            <td>Mobile Number</td>
            <td> <input id="r2" type="text" name="Telephone" size="48"> </td>
            </tr>

            <tr>
            <td>Friend Number</td>
            <td> <input id="r2" type="text" name="FTelephone" size="48"> </td>
            </tr>


            <tr>
            <td>E-mail Address:</td>
            <td> <input id="r3" type="text" name="EMail" rows="15" cols="50"></input> </td>
            </tr>

            <tr>
            <td>Date</td>
            <td> <input type="date" name="Date"  required /> </td>
            </tr>

            <tr>
            <td>Material ID</td>
            <td> <input type="text" name="ID" requried /> </td>
            </tr>            
           
        </table>
		<button type="submit" class="registerbtn" >Register</button>


			</form>
		</div>	
	</div>


</body>
</html>















