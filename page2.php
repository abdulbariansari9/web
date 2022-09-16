<section class="best-selling-product-section">
    <h1 class="section-title">best selling products</h1>
    <div class="product-container">
        <div class="product-card">
            <img src="img/product-1.png" class="product-img" alt="image missing"><center>Product 1</center>
         <center>Product 1</center>
         <center>Product 1</center>
            
            
        </div>
        <div class="product-card">
            <img src="img/product-1.png" class="product-img" alt="image missing">product 2
        
    </div>
    
     </div>
    
</section>
<style>

.best-selling-product-section{
    position: relative;
    padding: 20px 5vw;
}

.section-title{
    text-transform: capitalize;
    font-size: 30px;
    margin-bottom: 30px;
}

.product-container{
    display: flex;
    justify-content: space-between;
    height: 400px;
}

.product-card{
    border: 2px solid green;
    width: 200px;
    height: 270px;
    overflow: hidden;
    position: relative;
    background: white;
}

.product-card:nth-child(even){
    border-color: red;
    background: white;
}

.product-img{
    width: 100%;
    height: 80%;
    object-fit: cover;
    transition: .5s;
}

.product-name{
    position: absolute;
    color: #fff;
    text-transform: capitalize;
    font-family: 'lato', sans-serif;
    font-size: 25px;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    opacity: 0;
    transition: .5s;
}

.product-card:hover .product-name{
    opacity: 1;
}

.product-card:hover .product-img{
    opacity: 0.5;
}
</style>

