// show menu
let nav = document.querySelector("nav");
let menuBtn = document.querySelectorAll(".menuBtn");
let menuList = document.getElementById("menuList");

menuBtn.forEach((btn) => {
  btn.addEventListener("click", showMenu);
});

window.addEventListener("resize", resetMenu);

function resetMenu() {
  menuList.className = "";
}

function showMenu() {
  if (menuList.classList.contains("active")) {
    menuList.className = "inActive";
  } else {
    menuList.className = "active";
  }
}
// ----------------------------------------------------------

//// video player
//let videoPlayer = document.querySelector(".video-player");
//let videoControl = document.querySelector(".video-control");
//let playBtn = videoControl.querySelector(".video-play");
//let pauseBtn = videoControl.querySelector(".video-pause");
//
//playBtn.addEventListener("click", playVideo);
//
//function playVideo() {
//  videoPlayer.addEventListener("click", pauseVideo);
//  videoPlayer.play();
//  playBtn.style.display = "none";
//}
//
//function pauseVideo() {
//  videoPlayer.pause();
//  playBtn.style.display = "block";
//  videoPlayer.removeEventListener("click");
//}
// ----------------------------------------------------------

// testimonial
$("#owl-testimonial").owlCarousel({
  loop: true,
  autoplay: true,
  margin: 0,
  nav: false,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
// ----------------------------------------------------------

// load skill bar
let counter = document.querySelectorAll(".skill .progress-bar");
let statistics = document.querySelector(".skill");
let limit = [];
let trigered = true;
let statisticsHeight = statistics.scrollHeight;

window.onscroll = () => {
  if (trigered && statistics.offsetTop < window.scrollY + statisticsHeight) {
    trigered = false;
    startLoad();
  }
  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
};

if (window.scrollY > 50) {
  nav.classList.add("scrolled");
} else {
  nav.classList.remove("scrolled");
}

if (trigered && statistics.offsetTop < window.scrollY + statisticsHeight) {
  trigered = false;
  startLoad();
}

function startLoad() {
  counter.forEach((el) => {
    el.classList.add("load");
    el.setAttribute(
      "style",
      "max-width: " + el.getAttribute("data-percent") + "%"
    );
  });
}
// ----------------------------------------------------------

// preview product
let gallerry = document.querySelectorAll(".works-gallery img");
let previewBox = document.querySelector(".works .preview");
let previewItems = document.querySelector(".works .preview .items");

let imgUrl = "";
gallerry.forEach((el) => {
  el.nextSibling.addEventListener("click", previewProduct);
});
previewBox.addEventListener("click", () => {
  previewBox.style.display = "none";
  previewItems.innerHTML = "";
});
function previewProduct() {
  imgUrl = this.previousSibling.getAttribute("src");
  previewBox.style.display = "flex";
  previewItems.innerHTML = `<img src="${imgUrl}" alt="">`;
}

// ----------------------------------------------------------
