
<!DOCTYPE html>
<header>
  <div class="header">
    <div class="title">
      <!--<div class="menu" onclick="openNav()">MENU</div>-->
    </div>
  </div>
</header>

<div class="body">
  <h1>Students Login!</h1>
</div>

<form>
  Username:<br>
  <input type="text" name ="username">
  <br>
  Password:<br>
  <input type="password" name="pwd">
  <br><br>
  <input type="submit" value = "Submit">
</form>
<style>
    body {
  margin-left:0;
}
.header {
  width:100%;
  background-color:#0F1F38;
  height:5em;
  border-radius:0px;
  color:#fff;
  letter-spacing:3px;
  margin:0px auto;
  position:fixed;
  top:0px;
  font-family:"Century Gothic", sans-serif;
  z-index:10;
}

.title {
  width:100%;
  float:right;
  text-align:right;
  font-size:3em;
  margin-top:-0.15em;
  padding-left:0.1em;
  display:inline;
}

.logo {
  height:2em;
  margin-bottom:-0.8em;
}

h1 {
  text-align:center;
  font-family:"Trebuchet MS",sans-serif;
  font-size:3em;
}

body {
  padding-top:10em;
}

form {
  text-align: center;
  font-family:"Century Gothic",sans-seif;
}
input[type=text] {
  width: 8;
  border: 2px solid black;
  border-radius: 4px;
  padding: 4px 8px;
  -webkit-transition: width 0.5s ease_in_out;
  transition: width 0.5s ease-in-out;
}

input[type=text]:focus {
  width: 12%;
  background-color: lightblue;
}

input[type=password] {
  width: 8;
  border: 2px solid black;
  border-radius: 4px;
  padding: 4px 8px;
  -webkit-transition: width 0.5s
    ease_in_out;
  transition: width 0.5s ease-in-out;
}

input[type=password]:focus {
  width: 12%;
  background-color: lightblue;
}

input[type=submit] {
  background-color: #0F1F38;
  margin: 2px 4px;
  color: white;
  cursor: pointer;
  padding: 4px 8px;
}
</style>