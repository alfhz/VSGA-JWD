// HANDLE REDIRECT BETWEEN DASHBOARD AND YOUR PACKAGES
document.querySelectorAll(".nav-link").forEach(function (link) {
  link.addEventListener("click", function (event) {
    var section = this.getAttribute("data-section");

    if (section === "yourpackages") {
      window.location.href = "?page=yourpackages";
    } else {
      event.preventDefault();
      var targetSection = document.getElementById(section);
      if (targetSection) {
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: "smooth",
        });
      }
    }
  });
});
