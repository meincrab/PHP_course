
<?php 
session_start();
date_default_timezone_set("Europe/Helsinki");
if(!isset($_SESSION['session_username'])) {
    
header ("Location: login.php"); }
else {
include("additional/header.php")

    
?>
     
<div id="welcome">
Welcome: user, <span><?php echo $_SESSION['session_username'] ?> </span> to assignment schedule. The time is <?php echo date('h:i:sa'); ?> 
<a href="logout.php">Logout</a>
</div>

<form>
<select name="courses" onchange="selectCourseData(this.value)">
<option value="">Select a course:</option>
  <?php include("additional/coursesSelector.php")?>
  </select>
</form>
<br>
<div id="txtOutput"><b>Info will be listed here...</b></div>
<br>
<br>
<form>
<p>Find info here</p>
<input type="text" size="30" onkeyup="findResult(this.value)">
<div id="livesearch"></div>
<button type="button" onclick="loadList()">Get all my notes</button>
<br><br>
<table id="demo"></table>
</form>

<div id="dataKeeper">
<h3>New Course Registration form</h2>
<button id="hide">Hide</button>
<button id="show" onclick="showRegForm()">Show</button>
</div> 



<?php // include("addCourse.php")?>
<?php 
}
?>
<script>

function showRegForm() {
  var uplInfoDiv = "<div id='uplInfoDiv'></div>";
  $( "#dataKeeper" ).append(uplInfoDiv);
  $("#uplInfoDiv").load("addCourse.php");
}

$(document).ready(function(){
    $("#hide").click(function(){
        $("#uplInfoDiv").hide();
    });
    $("#show").click(function(){
        $("#uplInfoDiv").show();
    });
});


/* -----------------------------------------------------Tried to make dynamical content upload. Didnt work out.
   function loadRegForm(){ 
        $("#regCallerBtn").on('click', function(){
          event.preventDefault();
          var uplInfoDiv = "<div id='uplInfoDiv'></div>";
          $( "#dataKeeper" ).append(uplInfoDiv);
          $("#uplInfoDiv").load("addCourse.php");
          $("#regCallerBtn").remove();
          var hideButton = "<button id='hideFormBtn' onclick='hideRegForm()'>Hide Form</button>";
          $("#dataKeeper").append(hideButton);
        });

  }
  function hideRegForm(){ 
        $("#hideFormBtn").on('click', function(){
          event.preventDefault();
          $("#uplInfoDiv").remove();
          $("#hideFormBtn").remove();
          var regCallerBtn =" <button id=regCallerBtn' onclick='loadRegForm()'> Display Registration Form </button>";
          $("#dataKeeper").append(regCallerBtn);
        });

  }
    loadRegForm();
    hideRegForm();

    */



    
</script>   
<?php include("additional/footer.php");