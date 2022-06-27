// Index

const btnPrincipe = document.querySelector(".btn-principe");
const btnRarete = document.querySelector(".btn-rarete");
const btnNft = document.querySelector(".btn-nft");
const btnShop = document.querySelector(".btn-shop");
const principe = document.querySelector(".principe");
const rarete = document.querySelector(".rarete");
const nft = document.querySelector(".nft");
const shop = document.querySelector(".shop");

const switchColec = (event) => {
  event.preventDefault();
  principe.style.display = "none";
  rarete.style.display = "none";
  nft.style.display = "none";
  shop.style.display = "none";
  btnPrincipe.style.opacity = "50%";
  btnRarete.style.opacity = "50%";
  btnNft.style.opacity = "50%";
  btnShop.style.opacity = "50%";

  const window = document.querySelector("." + event.target.id);
  window.style.display = "flex";
  event.target.style.opacity = "100%";
};
if (btnPrincipe) {
  btnPrincipe.addEventListener("click", switchColec);
  btnRarete.addEventListener("click", switchColec);
  btnNft.addEventListener("click", switchColec);
  btnShop.addEventListener("click", switchColec);
}

// ShowProduit

let img1 = document.querySelector(".img1Show");
let img2 = document.querySelector(".img2Show");
let img3 = document.querySelector(".img3Show");

const switchImgShow = (event) => {
  event.preventDefault();
  const source = event.target.src;
  const source2 = img1.src;

  img1.src = source;
  event.target.src = source2;
  console.log(img1.src);
};

img2.addEventListener("click", switchImgShow);
img3.addEventListener("click", switchImgShow);
