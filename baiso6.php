<?php
session_start();
include_once("model/user.php");
if (!isset($_SESSION["user"])) {
    header("location:login.php");
}
?>
<?php
include_once("header.php")
?>

<?php
include_once("nav.php")
?>


<?php
echo "baiso5";
?>

<button type="button" onclick="testAjax()">Test Javascript</button>

<div id="contentAjax"></div>
<script>
    function testAjax() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              //  var user = JSON.parse(this.responseURL);
               // console.log(user);
                // var str = "<ul>";
                // str += "<li>"
                // str += "Username: " + user.userName;
                // str += "</li>";
                // str += "<li>"
                // str += "Password: " + user.passWord;
                // str += "</li>";
                // str += "<li>"
                // str += "Fullname: " + user.fullName;
                // str += "</li>";
                // str += "</ul>";
                document.getElementById("contentAjax").innerHTML = this.responseText;


            }
        }
        xhttp.open("GET", "testajax.php?username=abc", true);
        xhttp.send();
    }
</script>

<?php
include_once("footer.php")
?>