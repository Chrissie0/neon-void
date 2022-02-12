jQuery(document).ready(function($){

})
window.onload = function() { 
    // hiding menu on mobile view
    let menuButton = document.getElementById("hidemenu");
    let navMenu = document.querySelector("nav");
    // console.log(navMenu);
    menuButton.onclick = function() {
        if (navMenu.style.display == "block") {
            navMenu.style.display = "none";
        } else {
            navMenu.style.display = "block";
        }
    }

    //get path
    let pathLength = location.pathname.split("/").length;
    // get last bit of path
    let slug = location.pathname.split("/")[pathLength-2];
    if (slug == "artist") {
        // Code for image onclick behaviour taken and modified from https://www.w3schools.com/howto/howto_css_modal_images.asp
        let lightbox = document.getElementById("lightbox");
        // console.log(lightbox);
        let img = document.getElementsByClassName("catimage");
        // console.log(img);
        let button = document.getElementsByClassName("close")[0];
        // x hidden by default
        button.style.display = "none";
        let fullImg = document.getElementById("fullimg");
        // loop through every <img> with class "catimage", put an onclick event on them
        for (let i = 0; i<img.length; i++) {
            img[i].onclick = function(){
                button.style.display = "block";
                lightbox.style.display = "block";
                fullImg.src = this.src;
            }
        }
        button.onclick = function() { 
            lightbox.style.display = "none";
        }
    }
}