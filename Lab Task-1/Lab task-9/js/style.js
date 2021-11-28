
function checkEmail()
{
    if (document.getElementById("semail").value == "") 
    {
	  	document.getElementById("emailErr").innerHTML = "Email Required";
		document.getElementById("emailErr").style.color = "red";
		document.getElementById("semail").style.borderColor = "red";
	}
	
	else if(document.form.semail.value.indexOf("@")<1||document.form.semail.value.indexOf("@")+2>document.form.semail.value.lastIndexOf(".")||document.form.semail.value.lastIndexOf(".")+2>=document.form.semail.value.length)
    {
        document.getElementById("emailErr").innerHTML = "Invalid Email Format";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("semail").style.borderColor = "red";
    }
	
	else
	{
		document.getElementById("emailErr").innerHTML = "";
		document.getElementById("semail").style.borderColor = "black";
	}
}

function checkName() 
{

	if (document.getElementById("sname").value == "") 
	{
		document.getElementById("nameErr").innerHTML = "Name can't be blank";
		document.getElementById("nameErr").style.color = "red";
		document.getElementById("sname").style.borderColor = "red";
	}

	else
	{
		document.getElementById("nameErr").innerHTML = "";
		document.getElementById("sname").style.borderColor = "black";
	}
			
}



function checkusername() 
{
	if (document.getElementById("susername").value == "") 
	{
		document.getElementById("usernameErr").innerHTML = " can't be blank";
		document.getElementById("usernameErr").style.color = "red";
		document.getElementById("susername").style.borderColor = "red";
	}

	else
	{
		document.getElementById("usernameErr").innerHTML = "";
		document.getElementById("susername").style.borderColor = "black";
	}
			
}




function checkPassword()
{
    if (document.getElementById("spassword").value == "") 
    {
		document.getElementById("passwordErr").innerHTML = "Password Required";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("spassword").style.borderColor = "red";
	}
	else if(document.getElementById("spassword").value.length<8)
	{
		document.getElementById("passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("passwordErr").style.color = "red";
		document.getElementById("spassword").style.borderColor = "red";
	}
	else
	{
		document.getElementById("passwordErr").innerHTML = "";
		document.getElementById("spassword").style.borderColor = "black";
	}
}


function checkConfirmPassword()
{
    if (document.getElementById("hconfirm_password").value == "") 
    {
		document.getElementById("hconfirm_passwordErr").innerHTML = "Password Required";
		document.getElementById("hconfirm_passwordErr").style.color = "red";
		document.getElementById("hconfirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("hconfirm_password").value.length<8)
	{
		document.getElementById("hconfirm_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("hconfirm_passwordErr").style.color = "red";
		document.getElementById("hconfirm_password").style.borderColor = "red";
	}
	else if(document.getElementById("hconfirm_password").value != document.getElementById("hpassword").value)
	{
		document.getElementById("hconfirm_passwordErr").innerHTML = "Password Dosen't Match";
		document.getElementById("hconfirm_passwordErr").style.color = "red";
		document.getElementById("hconfirm_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hconfirm_passwordErr").innerHTML = "";
		document.getElementById("hconfirm_password").style.borderColor = "black";
	}
}


function checkPhoneNumber()
{
    if (document.getElementById("sphone").value == "") 
    {
		document.getElementById("mobile_numberErr").innerHTML = "Mobile Number Required";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("sphone").style.borderColor = "red";
	}
	else if(document.getElementById("sphone").value.length<11)
	{
		document.getElementById("mobile_numberErr").innerHTML = "Must Be Atleast 11 Numbers";
		document.getElementById("mobile_numberErr").style.color = "red";
		document.getElementById("sphone").style.borderColor = "red";
	}
	else
	{
		document.getElementById("mobile_numberErr").innerHTML = "";
		document.getElementById("sphone").style.borderColor = "black";
	}
}



function checkregistrationid()
{
    if (document.getElementById("hosid").value == "") 
    {
		document.getElementById("hosidErr").innerHTML = "registrationid Number Required";
		document.getElementById("hosidErr").style.color = "red";
		document.getElementById("hosid").style.borderColor = "red";
	}
	else if(document.getElementById("hosid").value.length<5)
	{
		document.getElementById("hosidErr").innerHTML = "Must Be Atleast 5 Numbers";
		document.getElementById("hosidErr").style.color = "red";
		document.getElementById("hosid").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hosidErr").innerHTML = "";
		document.getElementById("hosid").style.borderColor = "black";
	}
}

function checkicuseat()
{
    if (document.getElementById("hicuseatno").value == "") 
    {
		document.getElementById("hicuseatnoErr").innerHTML = "ICU Seat Number Required";
		document.getElementById("hicuseatnoErr").style.color = "red";
		document.getElementById("hicuseatno").style.borderColor = "red";
	}
	else if(document.getElementById("hicuseatno").value.length<2)
	{
		document.getElementById("hicuseatnoErr").innerHTML = "Must Be Atleast 2 Numbers";
		document.getElementById("hicuseatnoErr").style.color = "red";
		document.getElementById("hicuseatno").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hicuseatnoErr").innerHTML = "";
		document.getElementById("hicuseatno").style.borderColor = "black";
	}
}
function checkwardnumber()
{
    if (document.getElementById("hoswno").value == "") 
    {
		document.getElementById("hoswnoErr").innerHTML = "Ward Seat Number Required";
		document.getElementById("hoswnoErr").style.color = "red";
		document.getElementById("hoswno").style.borderColor = "red";
	}
	else if(document.getElementById("hoswno").value.length<2)
	{
		document.getElementById("hoswnoErr").innerHTML = "Must Be Atleast 2 Numbers";
		document.getElementById("hoswnoErr").style.color = "red";
		document.getElementById("hoswno").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hoswnoErr").innerHTML = "";
		document.getElementById("hoswno").style.borderColor = "black";
	}
}

function checkseatnumber()
{
    if (document.getElementById("hosnoseat").value == "") 
    {
		document.getElementById("hosnoseatErr").innerHTML = "Seat Number Required";
		document.getElementById("hosnoseatErr").style.color = "red";
		document.getElementById("hosnoseat").style.borderColor = "red";
	}
	else if(document.getElementById("hosnoseat").value.length<2)
	{
		document.getElementById("hosnoseatErr").innerHTML = "Must Be Atleast 2 Numbers";
		document.getElementById("hosnoseatErr").style.color = "red";
		document.getElementById("hosnoseat").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hosnoseatErr").innerHTML = "";
		document.getElementById("hosnoseat").style.borderColor = "black";
	}
}

function checkcabinnumber()
{
    if (document.getElementById("hcabinno").value == "") 
    {
		document.getElementById("hcabinnoErr").innerHTML = "Cabin Seat Number Required";
		document.getElementById("hcabinnoErr").style.color = "red";
		document.getElementById("hcabinno").style.borderColor = "red";
	}
	else if(document.getElementById("hcabinno").value.length<2)
	{
		document.getElementById("hcabinnoErr").innerHTML = "Must Be Atleast 2 Numbers";
		document.getElementById("hcabinnoErr").style.color = "red";
		document.getElementById("hcabinno").style.borderColor = "red";
	}
	else
	{
		document.getElementById("hcabinnoErr").innerHTML = "";
		document.getElementById("hcabinno").style.borderColor = "black";
	}
}





function checkaddress()
{
    if (document.getElementById("saddress").value == "") 
    {
		document.getElementById("addressErr").innerHTML = "Address is Required";
		document.getElementById("addressErr").style.color = "red";
		document.getElementById("saddress").style.borderColor = "red";
	}	else
	{
		document.getElementById("addressErr").innerHTML = "";
		document.getElementById("saddress").style.borderColor = "black";
	}
}


function checkhedob()
{
    if (document.getElementById("dob").value == "") 
    {
		document.getElementById("dobErr").innerHTML = "Date Of Birth Required";
		document.getElementById("dobErr").style.color = "red";
		document.getElementById("dob").style.borderColor = "red";
	}
	else
	{
		document.getElementById("dobErr").innerHTML = "";
		document.getElementById("dob").style.borderColor = "black";
	}
}

function checkoxygenavailability()
{
	if (document.getElementById("hoxav").value == "none") 
    {
        document.getElementById("hoxavErr").innerHTML = "Check oxygen availability can't be blank";
        document.getElementById("hoxavErr").style.color = "red";
        document.getElementById("hoxav").style.borderColor = "red";
    }

    else
    {
        document.getElementById("hoxavErr").innerHTML = "";
        document.getElementById("hoxav").style.borderColor = "black";
    }
}


function checkCurrentPassword()
{
    if (document.getElementById("current_password").value == "") 
    {
		document.getElementById("current_passwordErr").innerHTML = "Password is Required";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else if(document.getElementById("current_password").value.length<8)
	{
		document.getElementById("current_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("current_passwordErr").style.color = "red";
		document.getElementById("current_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("current_passwordErr").innerHTML = "";
		document.getElementById("current_password").style.borderColor = "black";
	}
}


function checkNewPassword()
{
    if (document.getElementById("new_password").value == "") 
    {
		document.getElementById("new_passwordErr").innerHTML = "New Password is Required";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	else if(document.getElementById("new_password").value.length<8)
	{
		document.getElementById("new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("new_passwordErr").style.color = "red";
		document.getElementById("new_password").style.borderColor = "red";
	}
	
	else
	{
		document.getElementById("new_passwordErr").innerHTML = "";
		document.getElementById("new_password").style.borderColor = "black";
	}
}


function checkRetypeNewPassword()
{
    if (document.getElementById("retype_new_password").value == "") 
    {
		document.getElementById("retype_new_passwordErr").innerHTML = "Retype New Password is Required";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value.length<8)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Must Be Atleast 8 Characters";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else if(document.getElementById("retype_new_password").value != document.getElementById("new_password").value)
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "Sorry Password Dosen't Match";
		document.getElementById("retype_new_passwordErr").style.color = "red";
		document.getElementById("retype_new_password").style.borderColor = "red";
	}
	else
	{
		document.getElementById("retype_new_passwordErr").innerHTML = "";
		document.getElementById("retype_new_password").style.borderColor = "black";
	}
}


// function search(id) //for appointment
// {
// 	if (document.getElementById("searchByID").value == "") 
//     {
// 		document.getElementById("searchByIDErr").innerHTML = "ID Required";
// 		document.getElementById("searchByIDErr").style.color = "red";
// 		document.getElementById("searchByID").style.borderColor = "red";
// 		document.getElementById("search").style.borderColor = "red";
// 	}
// 	else 
// 	{
// 		var xhttp = new XMLHttpRequest();
//   		xhttp.onreadystatechange = function() {
//     	if (this.readyState == 4 && this.status == 200) {
//      	document.getElementById("txtHint").innerHTML = this.responseText;
//      	}
//   		};
//     	xhttp.open("GET", "Controller/search.php?id="+id, true);
//    		xhttp.send();
// 		document.getElementById("searchByIDErr").innerHTML = "";
// 		document.getElementById("searchByID").style.borderColor = "black";
// 		document.getElementById("search").style.borderColor = "black";
// 	}
// }

// function searchPrescription(id) //for prescription
// {
// 	var xhttp;
// 	if (id == "") 
//     {
// 		document.getElementById("txtHint").innerHTML = "";
// 		return;
// 	}

// 		xhttp = new XMLHttpRequest();
//   		xhttp.onreadystatechange = function() {
//     	if (this.readyState == 4 && this.status == 200) {
//      	document.getElementById("txtHint").innerHTML = this.responseText;
//      	}
//   		};
//     	xhttp.open("GET", "Controller/searchPrescription.php?id="+id, true);
//    		xhttp.send();
	
// }
