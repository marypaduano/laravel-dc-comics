<footer>
<div class="container">
    <button class="sign-up">sign-up now</button>
    <ul class="icon-list"style="list-style:none;">
        <li class="icon_item follow">
            <h2>follow us</h2>
        </li>
        <li class="icon_item">
            <img src="/img/footer-facebook.png" alt="">
        </li>
        <li class="icon_item">
            <img src="/img/footer-twitter.png" alt="">
        </li>
        <li class="icon_item">
            <img src="/img/footer-youtube.png" alt="">
        </li>
        <li class="icon_item">
            <img src="/img/footer-pinterest.png" alt="">
        </li>
        <li class="icon_item">
            <img src="/img/footer-periscope.png" alt="">
        </li>
    </ul>   
</div>
</footer>

<style lang="scss" scoped>
footer{
    background-color: rgb(48, 48, 48);
}    
.container {
    
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
}

.icon-list{
    display: flex;
    align-items:center;
}
    .icon_item{
        padding: 0 10px;
    }
    .follow{
        font-weight: 600;
        color: rgb(2, 130, 249);
        text-transform: uppercase;
    }    
.sign-up{
        border: 4px solid rgb(2, 130, 249);
        text-transform: uppercase;
        font-weight: 600;
        color: white;
        padding: 15px;
        background-color: transparent;
    }
</style>