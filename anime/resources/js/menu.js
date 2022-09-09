var prevButton = false;

const btn = document.getElementById("menuButton");
const ico = document.getElementById("menuIcon");
const con = document.getElementById("menuContents");

btn.addEventListener('click', (e) => {
    if (prevButton == false) {
        e.target.classList.add('true');
        prevButton = true;
        ico.classList.remove('fa-bars');
        ico.classList.add('fa-times');                            
        con.classList.add('active');

    } else {
        e.target.classList.remove('true');
        prevButton = false;
        ico.classList.remove('fa-times');
        ico.classList.add('fa-bars');
        con.classList.remove('active');
    }
});