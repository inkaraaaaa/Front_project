
// function serial(){document.getElementById("video").style.display = "flex";}
var modalserial = document.getElementById("serial")
var btn = document.getElementById("video")
btn.onclick = function(){
    video.style.display = "block";;  
}
window.onclick = function(event) {
    if (event.target == 'serial') {
      video.style.display = "none";
    }
  }