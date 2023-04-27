function toggleImage(id) {
	var image = document.getElementById(id).style;
	var image_btn = document.getElementById(id + "_btn");
	if (image.display === "none") {
	  image.display = "block";
	  image_btn.innerHTML = "hide image";
	} else {
	  image.display = "none";
	  image_btn.innerHTML = "show image";
	}
  }