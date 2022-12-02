const zoekbar = document.querySelector("#zoekbar");
const search = document.querySelector(".search");

document.addEventListener('keydown', function(e){
    if (e.ctrlKey && e.key === '/') {
        zoekbar.focus();
    }    
});

if (zoekbar.focus()) {
    search.style.border = "2px solid #24354d";
}
else{
    search.style.border = "2px solid #f5f5f5";
}