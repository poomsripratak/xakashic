const searchBar = document.getElementById("searchBar");

searchBar.addEventListener('keyup',(e) => {
    console.log(e.target.value);
    document.getElementById("meme").innerHTML = e.target.value;
});
