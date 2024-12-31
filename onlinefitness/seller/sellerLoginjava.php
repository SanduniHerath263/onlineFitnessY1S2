<script>

function pass1()
{
var characters = document.getElementById("password").value;
var count = characters.length;

if(count>=8)
{
	alert("password is valid");
	return true;
}
else
{
	alert("password is invalid");
	return false;
}

}

</script>