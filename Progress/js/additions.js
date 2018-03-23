/* Home Toggle More/Less */
function showMore() {
    var x = document.getElementById("moreText");
    var y = document.getElementById("morebutton");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.backgroundColor = "#80ccff";
        y.innerHTML = "less...";
    } 
    else {
        x.style.display = "none";
        y.style.backgroundColor = "#80ccff";
        y.innerHTML  = "more...";
    }
}

/* Apply Payment */
function showHideC() {
  var y = document.getElementById("check");
  if(y.style.visibility === "hidden"){
    y.style.visibility = "visible";
    y.style.height = "400px";
  }
  else {
    y.style.visibility = "hidden";
    y.style.height = "0px";
  }
}
function showHideO() {
  var y = document.getElementById("online");
  if(y.style.visibility === "hidden"){
    y.style.visibility = "visible";
  }
  else {
    y.style.visibility = "hidden";
  }
}

/* FAQ */
function accfaq() {
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function(){
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } 
        else {
          panel.style.display = "block";
        }
      });
		}
}

/* Apply Page Cards */
var applySmall = document.getElementById("applySmall");
var applyBig = document.getElementById("applyBig");
var guideSmall = document.getElementById("guideSmall");
var guideBig = document.getElementById("guideBig");

function showApply() {
  if(applyBig.style.visibility === "hidden"){
    guideSmall.style.visibility = "hidden";
    guideSmall.style.width = "0px";
    applyBig.style.visibility = "visible";
    applyBig.style.width = "60%";
  }
  else {
    applyBig.style.visibility = "hidden";
    applyBig.style.width = "0px";
    guideSmall.style.visibility = "visible";
    guieeSmall.style.width = "30%";
  }
}
function showGuide() {
  if(guideBig.style.visibility === "hidden"){
    applySmall.style.visibility = "hidden";
    guideBig.style.visibility = "visible";
  }
  else {
    applySmall.style.visibility = "visible";
    guideBig.style.visibility = "hidden";
  }
}