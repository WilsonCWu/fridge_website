<html>
<head>
<script>
function sendNewCommand() {
  var xmlhttp = new XMLHttpRequest();
  var str = document.getElementById("InputText").value
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Output").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "sql.php?q=" + str, true);
  xmlhttp.send();
}
</script>
</head>

<body>
<form> 
Command: <input type="text" id="InputText">
</form>
<button type="button" onclick="sendNewCommand()">Send Command</button>
<p>Output: <span id="Output"></span></p>
</body>
</html>

