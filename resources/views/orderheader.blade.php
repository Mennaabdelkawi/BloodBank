<!DOCTYPE html>
<html lang="en">
<head>


<style>
* {
  box-sizing: border-box;
}



body {

 background:linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)),url('css/img/background4.jpg');
background-position: center;
background-repeat: no-repeat;
background-size:cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-color: #ffffff;
margin: 0;

}
input[type=text], select {
    width: 27%;
padding: 7px 15px;
margin: 8px 500px;
display: inline-block;
border: 1px solid darkred;
border-radius: 4px;
box-sizing: border-box;
}
h3{
    width: 27%;
padding: 5px 5px;
margin: 8px 500px;
font-family: Arial, Helvetica, sans-serif;
font-size: 25px;
color:darkred;
}

input[type=submit] {
width: 27%;
background-color: firebrick;
color: white;
padding: 7px 15px;
margin: 8px 500;
border: none;
border-radius: 4px;
cursor: pointer;

}

input[type=submit]:hover {
background-color: rgb(136, 51, 51);
}

div {
border-radius: 2px;

padding: 2px;
}


/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:#333;
}

/* Style the topnav links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 27px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: rgb(131, 91, 91);
  color:red;
}
.top{
    float:left;
    display: block;
    padding: 1px 16px;
    margin: 0px -16px;
  background-color:#333;
  overflow: hidden;

}
</style>
</head>
<body>
    <div class ="top">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <nav class=" container-fluid navbar navbar-expand-lg  bHeader ">
            <a class="navbar-brand " href=""><img src="{{ url('css/img/welcome.png') }}" alt="Website Logo"
                    id="logo" width="25%"></a>
                    <span class="navbar-toggler-icon"></span>
            </div>

<div class="topnav">

  <a href={{route('home')}}>Home</a>
  <a href={{route('about')}}> About US</a>
  <a href={{route('search')}}> Search</a>
  <a href={{route('contact')}}> Contact US </a>
</div>



</body>

</html>
