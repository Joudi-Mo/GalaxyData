const zoekbar = document.querySelector("#zoekbar");
const search = document.querySelector("#search");

document.addEventListener("keydown", function (e) {
    if (e.ctrlKey && e.key === "/") {
        zoekbar.focus();
    }
});
zoekbar.addEventListener("focus", function (e) {
    search.classList.add("active");
});
zoekbar.addEventListener("blur", function (e) {
    search.classList.remove("active");
});

// search.style.border.focus = "2px solid #24354d !important";
// search.style.border = "2px solid #f5f5f5";

$(document).on("click", "#Like", function () {});
