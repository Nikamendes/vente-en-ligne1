let articleNumber = 0
const shop = document.getElementById('shop')
const btnAddArticle = document.getElementById('add')
const btnDeleteArticle = document.getElementById('delete')
const numberArticle = document.getElementById('number-article')

const addArticle = () => {
  articleNumber++
  numberArticle.textContent = articleNumber
  if (articleNumber > 0) {
    shop.style.display = "block"
  }
}

const deleteArticle = () => {
  if (articleNumber > 0) {
    articleNumber--
    numberArticle.textContent = articleNumber
    if (articleNumber === 0) {
      shop.style.display = "none"

    }
  }
}

const goToShop = () => {
  btnAddArticle.removeEventListener('click', addArticle).btnDeleteArticleDeleteArticle.removeEventListener('click', deleteArticle)
}
shop.addEventListener('click', goToShop)

btnAddArticle.addEventListener('click', addArticle)
btnDeleteArticle.addEventListener('click', deleteArticle)