$(document).ready(function(){
    $('.searchBar input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).parent("form").siblings(".result");
        if(inputVal.length){
            $.get("resources/php/backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".resultBox", function(){
        var inputVal = $(this).find('h3').text();
        var number = 0;
        $.get("resources/php/newpage-search.php", {term: inputVal}).done(function(data){
                number=parseInt(data);
                location.href = "/test/xakashic/anime/review.php?anime="+number;

        });
    });
});

var prevButton = false;

                const searchBtn = document.getElementById("searchButton");
                const searchText = document.getElementById("searchText");
                const searchSection = document.getElementById("searchSection");
                const searchBar = document.getElementById("searchBar");
                const searchResult = document.getElementById("searchResult");



                searchBtn.addEventListener('click', (e) => {
                    if (prevButton == false) {
                        searchBar.classList.remove('deactive');
                        searchBar.classList.add('active');
                        searchText.classList.remove('deactive');
                        searchText.classList.add('active');
                        searchSection.classList.remove('deactive');
                        searchSection.classList.add('active');
                        e.target.classList.remove('deactive');
                        e.target.classList.add('active');
                        prevButton = true;

                    } else {

                        searchText.value = "";
                        searchResult.innerHTML="";

                        searchBar.classList.add('deactive');
                        searchBar.classList.remove('active');
                        searchText.classList.add('deactive');
                        searchText.classList.remove('active');
                        searchSection.classList.add('deactive');
                        searchSection.classList.remove('active');
                        e.target.classList.add('deactive');
                        e.target.classList.remove('active');
                        prevButton = false;
                        
                    }
                });