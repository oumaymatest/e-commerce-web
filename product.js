// had lcode : mni dir click 3la smallimage
//ghadi twli fblaset l main image fl product

const mainImg = document.getElementById("main-img");
const smallImg = document.getElementsByClassName("smImg");

smallImg[0].addEventListener('click', () => {
    mainImg.src = smallImg[0].src;
})
smallImg[1].addEventListener('click', () => {
    mainImg.src = smallImg[1].src;
})
smallImg[2].addEventListener('click', () => {
    mainImg.src = smallImg[2].src;
})
smallImg[3].addEventListener('click', () => {
    mainImg.src = smallImg[3].src;
})

