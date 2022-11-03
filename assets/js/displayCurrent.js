function display()
{
	var jsonData = $.ajax({
          url: "getData.php?opt=5",
          dataType: "json",
          async: false
          }).responseText;

	var values = JSON.parse(jsonData);

	document.getElementById("current-temperature").innerHTML = values.temperature;
	document.getElementById("current-humidity").innerHTML = values.humidity;
	document.getElementById("current-soil-moisture").innerHTML = values.soilmoist;
	document.getElementById("current-ldr").innerHTML = values.sunlight;
}

window.onload = display();
setInterval(display,300000);