<?php
$showTimeZone = true;

?>
<style>
#clock{
    backdrop-filter: blur(3px);
    box-shadow: 3px 3px 10px black;
    border-radius: 10px;


    padding-top: 40px;
    padding-bottom: 40px;
}
#clock_timing{
	font-family: 'Press Start 2P', cursive;
    color: #66ff99;
    font-size: 160%;
    text-align: center;
}
#clock_timezone{
	font-family: 'Press Start 2P', cursive;
    color: #66ff99;
    font-size: 80%;
    text-align: center;
}
</style>
<div id="clock">
<div id="clock_timing"></div>
<?php if(true){ echo"<div id=\"clock_timezone\"></div>";}?>
</div>
<script>
    function currentTime() {
    var date = new Date(); /* creating object of Date class */
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    hour = updateTime(hour);
    min = updateTime(min);
    sec = updateTime(sec);
    
    document.getElementById("clock_timing").innerText = hour + ":" + min + ":" + sec; /* adding time to the div */
      var t = setTimeout(function(){ currentTime() }, 300); /* setting timer */
  }
  
  function updateTime(k) {
    if (k < 10) {
      return "0" + k;
    }
    else {
      return k;
    }
  }
  currentTime();
  timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
  var tz = document.getElementById("clock_timezone");
  tz.innerText = timezone;
</script>


