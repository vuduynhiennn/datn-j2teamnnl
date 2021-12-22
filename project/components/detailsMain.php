<style>
    .details--ctn {
        width: 1256px;
        margin: 0 auto;
        display: flex;
        justify-content: space-around;
        flex-direction: row;
        background-color: white;
        border-radius: 15px;
        padding: 25px 0px;
    }
    .details--ctn__img {
        width: 440px;
        height: 450px;
    }
    .details--ctn__img img {
        width: 100%;
        height: 100%;
        border: 5px;
        border-radius: 10px;
    }
    .details--ctn__menu {
        text-align: left;
        max-width: 700px;
        /* width: 60%; */
        line-height: 30px;
        /* background-color: pink; */
    }
    .button {
        cursor: pointer;
        font-weight: 500;
        margin-right: 4px;
        font-size: 15px;
        padding: 14px;
    }
    .details--describe {
        display: flex;
        justify-content: space-between;
        width: 1256px;
        margin: 0 auto;
    }
    .origin {
        width: 550px;
        border-radius: 12px;
        background-color: white;
        margin: 20px;
        padding: 20px;
    }
    .comment {
        width: 700px;
        border-radius: 12px;
        background-color: white;
        margin: 20px;
        padding: 20px;
    }
    .fa-star {
        color: #FFC600;
        font-size: 12px;
    }
    .rating {
        display: flex;
        justify-content: start;
        align-items:baseline;
        text-align: center;
        gap: 6px;
        line-height: 13px;
    }

    .size {
        cursor: pointer;
    }
    .size:checked {
        background-color: red;
        border: 1px solid #EE2624;
    }
    .details-buy {
        /* background-color: red; */
        display: flex;
        justify-content: space-around;
    }
    .details-text {
        margin: 15px 0px;
    }
    /* .comment {
        display: flex;
        justify-content: start;
        align-items: start;
        flex-direction: column;
        padding: 20px;
    } */
    .userName {
        font-weight: 700;
        font-size: 13px;
    }

    .userImg {
        width: 40px;
        height: 40px;
        border-radius: 100rem;
    }

    .userInfor {
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
    }
    .userTime {
        color: gray;
        font-size: 9px;
        font-style: italic;
    }
    .userComment {
        margin: 6px;
        font-size: 13px;
        color: black;
        padding: 10px 0px;
    }
</style>


<div class="main">
    <div class="details--ctn">
        <div class="details--ctn__img">
            <img src="https://source.unsplash.com/random" alt="">
        </div>
    
        <div class="details--ctn__menu">
            <h1 class="heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, accusamus?</h1>
            <h1 class="heading price">454.454đ</h1>
            <p style="text-decoration:line-through; display: inline-block; color: gray;">149.990đ </p>
            <span style="color: #EE2624">giảm 61%</span>
            <br>
            <br>


            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <a style="color: blue; font-size: 12px" href="#"> 12 lượt đánh giá</a>
                <br>
                <br>
                <i style="color: gray; font-size: 12px;" class="fas fa-cart-plus"></i>
                <a style="color: black; font-size: 12px" href="#">63 lượt mua</a>
                
            </div>

            <div class="line">

            </div>
            <br>

            

            <div class="details-list">
            <p style="display: inline-block; font-size: 13px;"> Chọn số lượng: </p>
            <button style="height: 27px; width: 27px; text-align: center; border-radius: 5px; border: none;">+</button>
            <input style="width: 35px; height: 25px; text-align: center; font-weight: bold; border-radius: 5px; border: 1px solid gray" placeholder="1" type="text">
            <button style="height: 27px; width: 27px; text-align: center;border-radius: 5px; border: none;">-</button>
            </div>

            <br>

            <div class="details-list">
            <p style="display: inline-block; font-size: 13px;"> Chọn kích thước: </p>
    
           
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">37</button>
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">38</button>
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">39</button>
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">40</button>
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">41</button>
            <button class="size" style="height: 28px; width: 34px; text-align: center;border-radius: 5px; border: none; font-size: 12px; font-weight: 600;">42</button>


            </div>


            <br>
            <div class="details-buy">
                <button style="width:25%" class="button">Thêm vào giỏ hàng</button>
                <button style="width: 25%;" class="button">Mua trước trả sau</button>
                <button style="width: 47%; background: #EE2624; color: white;" class="button">Mua ngay</button>  
            </div>

        </div>
    </div>
    <div class="details--describe">
        <div class="origin">
            <h1 class="title">Mô tả sản phẩm</h1>

            <p class="details-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ratione id at, distinctio eaque mollitia exercitationem doloribus voluptatibus est deserunt!</p>

            <h1 class="title">Thông tin cơ bản:</h1>

            <p class="details-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora excepturi atque, hic architecto consectetur ea expedita earum quaerat necessitatibus dicta temporibus quasi incidunt aspernatur debitis officiis facilis. Repellendus, voluptatibus! Pariatur.
            </p>

            <h1 class="title">Lưu ý</h1>
            <p class="details-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore omnis atque aliquam quibusdam eius impedit iure fuga delectus, dicta, adipisci tempora a quo ex quis facilis sapiente cupiditate assumenda illum aperiam perspiciatis. Voluptates voluptas quo rem delectus, deserunt voluptatibus minima.
            </p>
        </div>
        <div class="comment">
            <h1 class="title">Đánh giá nhận xét về sản phẩm</h1>
            <br>

            <div class="comment-ctn">
               <div class="comment-ctn__first">
                   <h1 style="font-size: 24px">4.6/5</h1>
                   <div class="rating">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                   </div>
               </div> 

               <div class="comment-ctn__last">

               </div>
            </div>
            <br>

            <div class="commet-user">
                <div class="userNe">

                    <div class="userInfor">
                        <img class="userImg" src="https://source.unsplash.com/random" alt="">
                        <div class="userInforCC">
                            <h1 class="userName">Vũ Duy Nhiên</h1>
                            <span class="userTime">10:19 22/12/2021</span>
                        </div>
                    </div>

                    <p class="userComment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laborum.</p>
                </div>
            </div>

            <div class="commet-user">
                <div class="userNe">

                    <div class="userInfor">
                        <img class="userImg" src="https://source.unsplash.com/random" alt="">
                        <div class="userInforCC">
                            <h1 class="userName">Vũ Duy Nhiên</h1>
                            <span class="userTime">10:19 22/12/2021</span>
                        </div>
                    </div>

                    <p class="userComment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laborum.</p>
                </div>
            </div>


            <div class="commet-user">
                <div class="userNe">

                    <div class="userInfor">
                        <img class="userImg" src="https://source.unsplash.com/random" alt="">
                        <div class="userInforCC">
                            <h1 class="userName">Vũ Duy Nhiên</h1>
                            <span class="userTime">10:19 22/12/2021</span>
                        </div>
                    </div>

                    <p class="userComment">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, laborum.</p>
                </div>
            </div>


        </div>
    </div>

</div>      
