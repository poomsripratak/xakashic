const myRating = document.getElementsByClassName("myRating");
for (let i = 0; i < myRating.length; i++) {
    var floorMyRating = Number(myRating[i].innerHTML);
    if (floorMyRating>=9.9){
    } else {
        floorMyRating = Math.floor(Number(myRating[i].innerHTML));
    }

    if (floorMyRating>=9.9) {
        myRating[i].classList.add('ten');
    } else if (floorMyRating==9) {
        myRating[i].classList.add('nine');
    } else if (floorMyRating==8) {
        myRating[i].classList.add('eight');
    } else if (floorMyRating==7) {
        myRating[i].classList.add('seven');
    } else if (floorMyRating==6) {
        myRating[i].classList.add('six');
    } else if (floorMyRating==5) {
        myRating[i].classList.add('five');
    } else if (floorMyRating==4) {
        myRating[i].classList.add('four');
    } else if (floorMyRating==3) {
        myRating[i].classList.add('three');
    } else if (floorMyRating==2) {
        myRating[i].classList.add('two');
    } else if (floorMyRating==1) {
        myRating[i].classList.add('one');
    } else if (floorMyRating==0) {
        myRating[i].classList.add('zero');
    }
}
