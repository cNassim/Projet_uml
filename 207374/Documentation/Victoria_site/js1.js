let afficherArticles = () => {
    document.getElementById('articlesContainer').innerHTML = ''; // Efface le contenu actuel avant d'ajouter les articles
    var gallery = document.getElementById('styleChoice').value;

    if (gallery == "Classy"){
        style = classy;
    }
    else if (gallery == "streetwear"){
        style = StreetWear;
    }
    else if (gallery == "Casual"){
        style = casual;
    }
    else if (gallery == "Sporty"){
        style = sporty;
    }

    for (let article of style){
        let articleHTML = `
            <div class="col-md-3 mb-4">
                <div class="product-layouts">
                    <div class="product-thumb">
                        <div class="image zoom">
                            <a href="#">
                               <img src="${article.imageSrc}" alt="${article.altText}" height="501" width="385" class="image-hover"
     onmouseenter="ajouterAnimation(this)" onmouseleave="retirerAnimation(this)"/></a>
                        </div>
                        <div class="thumb-description">
                            <div class="caption">
                                <h4 class="product-title text-capitalize"><a href="${article.productLink}">${article.productTitle}</a></h4>
                            </div>
                            <div class="rating">
                                <div class="product-ratings d-inline-block align-middle">
                                    ${article.ratings}
                                </div>
                            </div>
                            <div class="price">
                                <div class="regular-price">${article.price}</div>
                            </div>
                            <div class="button-wrapper">   
                                <div class="button-group text-center">
                                    <button type="button" class="btn btn-primary btn-cart" data-target="#cart-pop" data-toggle="modal"><i class="material-icons">shopping_cart</i><span>Add to cart</span></button>
                                    <a href="wishlist.html" class="btn btn-primary btn-wishlist"><i class="material-icons">favorite</i><span>wishlist</span></a>
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.getElementById('articlesContainer').innerHTML += articleHTML;
    }
}