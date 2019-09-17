var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {

    var content = this.previousElementSibling;
    if (content.style.display === "block") {
      this.innerHTML = "Read More";
      content.style.display = "none";
    } else {
    this.innerHTML = "Read Less";
      content.style.display = "block";
    }
  });
}
