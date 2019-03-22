
//Parallax movie description text
var i = 0;
var txt = 'A gangster family epic set in 1919 Birmingham, England and centered on a gang who sew razor blades in the peaks of their caps, and their fierce boss Tommy Shelby, who means to move up in the world.'; /* The text */
var speed = 15; /* The speed/duration of the effect in milliseconds */

function typeWriter() {

  if (i < txt.length) {
    document.getElementById("parallax_description").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

//Toggle the like button
function myFunction(x) {
	//Maybe change color? instead of thumbs down
    x.classList.toggle("fa-thumbs-down");
}