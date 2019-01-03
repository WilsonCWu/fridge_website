<html>
<head>
<script>
function sendNewCommand(command) {
  var xmlhttp = new XMLHttpRequest();
  //var str = document.getElementById("InputText").value
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("Output").innerHTML = this.responseText;
    }
  };
  xmlhttp.open("GET", "sql.php?q=" + command, true);
  xmlhttp.send();
}
function sendCookCommand() {
  sendNewCommand("cook");
}
function sendDispenseCommand() {
  sendNewCommand("dispense");
}
function sendOpenDoorCommand() {
  sendNewCommand("openDoor");
}
function sendCloseDoorCommand() {
  sendNewCommand("closeDoor");
}
function sendDropCommand() {
  sendNewCommand("drop");
}
function sendCustomCommand() {
  var command = document.getElementById("InputText").value;
  sendNewCommand(command);
}
</script>
</head>

<body>
  <button type="button" onclick="sendCookCommand()">Cook</button>
  <button type="button" onclick="sendDispenseCommand()">Dispense</button>
  <button type="button" onclick="sendOpenDoorCommand()">Open Door</button>
  <button type="button" onclick="sendCloseDoorCommand()">Close Door</button>
  <button type="button" onclick="sendDropCommand()">Drop Food</button>
</body>

<body>
  <form> 
  Command: <input type="text" id="InputText">
  </form>
  <button type="button" onclick="sendCustomCommand()">Send Custom Command</button>
  <p>Output: <span id="Output"></span></p>
</body>
</html>

