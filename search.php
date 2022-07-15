<html>
  <body>
    <?php
#variables
$search=$_POST["search"];
#switch case for search
switch($search) {
  #apps
  case "apps":
    apps();
  break;
  case "Apps":
    apps();
  break;
  case "APPS":
    apps();
  break;
  #home
  case "home":
    home();
  break;
  case "Home":
    home();
  break;
  case "HOME":
    home();
  break;
  #discord
  case "discord":
    ds();
  break;
  case "Discord":
    ds();
  break;
  case "DISCORD":
    ds();
  break;
  #webretro
  case "webretro":
    wr();
  break;
  case "Webretro":
    wr();
  break;
  case "WEBRETRO":
    wr();
  break;
  #vm
  case "VIRTUAL MACHINE":
    vm();
  break;
  case "Virtual Machine":
    vm();
  break;
  case "Virtual machine":
    vm();
  break;
  case "virtual machine":
    vm();
  break;
  case "VM":
    vm();
  break;
  case "Vm":
    vm();
  break;
  case "vm":
    vm();
  break;
  #chat
  case "chat":
    chat();
  break;
  case "Chat":
    chat();
  break;
  case "CHAT":
    chat();
  break;
  #proxy
  case "proxy":
    proxy();
  break;
  case "Proxy":
    proxy();
  break;
  case "PROXY":
    proxy();
  break;
  #didnt type anything
  default:
    nothin();
  break;
};
#functions
function apps() {
  echo "<meta http-equiv='refresh' content='0; url=/apps.php'>";
};
function home() {
  echo "<meta http-equiv='refresh' content='0; url=/'";
};
function ds() {
  echo "<meta http-equiv='refresh' content='0; url=dcrd.php'>";
};
function wr() {
  echo "<meta http-equiv'refresh' content='0; url=wr.php'>";
};
function vm() {
  echo "<meta http-equiv='refresh' content='1; url=https://vm.pomb.ga'>";
};
function chat() {
  echo "<meta http-equiv='refresh' content='1; url=chat.php'>";
};
function proxy() {
  echo "<meta http-equiv='refresh' content='1; url=proxy.php'>";
};


function nothin() {
  echo "<meta http-equiv='refresh' content='1; url=/'><h1>TYPE SOMETHING THIS TIME</h1>";
};
?>
  </body>
</html>
