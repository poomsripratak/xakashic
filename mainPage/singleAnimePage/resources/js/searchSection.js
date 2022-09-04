const searchBar = document.getElementById("searchBar");

searchBar.addEventListener('keyup',(e) => {
    console.log(e.target.value);

    if (e.target.value!=null){
        console.log("nie");
    }

});
