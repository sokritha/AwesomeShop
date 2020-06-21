const list_category_elements = document
  .querySelector(".list-category")
  .getElementsByTagName("li");
const list_discount_elements = document.querySelectorAll(".discount");
const after_discount_price_element = document.querySelectorAll(".after-price");
const init_discount_price_element = document.querySelectorAll(".initial-price");
const product_elements = document.getElementById("products-section").children;

const list_category = Array.from(list_category_elements);
const list_discount = Array.from(list_discount_elements);
const list_product = Array.from(product_elements);

function hideProduct() {
  list_product.forEach((foundProduct) => {
    console.log(foundProduct);
    foundProduct.classList.add("u-hide-box");
  });
}

function isSameCategory(nameCategory) {
  hideProduct();
  list_product.forEach((foundProductCategory, index) => {
    let nameClass = foundProductCategory.className;
    let listClass = nameClass.split(/(\s+)/);
    if (listClass[2] === nameCategory) {
      list_product[index].classList.remove("u-hide-box");
    }
  });
}

function isDiscountExist(list_discount) {
  list_discount.forEach((eachDiscount, index) => {
    let init_pText = init_discount_price_element[index].textContent;
    if (eachDiscount.textContent === "%") {
      eachDiscount.firstChild.style.visibility = "hidden";
      after_discount_price_element[index].innerHTML = "$" + init_pText;
      init_discount_price_element[index].style.visibility = "hidden";
    } else {
      // GET ONLY THE NUMBER OF PRICE
      let dText = eachDiscount.textContent;
      let dNum = dText.replace(/[^0-9]/g, "") * 1;
      let init_pNum = init_pText * 1;
      after_discount_price_element[index].innerHTML =
        "$" + Math.round(init_pNum * (1 - dNum * 0.01) * 100) / 100;
    }
  });
}

isDiscountExist(list_discount);

list_category.forEach((eachList, index) => {
  eachList.addEventListener("click", () => {
    // ADDING A CLASS TO EACH LIST WHEN USER CLICK ON IT
    eachList.classList.add("u-shadow-box");
    $(".list-category").children().not(eachList).removeClass("u-shadow-box");
    isSameCategory(eachList.innerText);
  });
});
