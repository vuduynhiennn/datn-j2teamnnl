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
        height: 550px;
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
        height: 200px;
        background-color: white;
        margin: 20px;
        padding: 20px;
    }
    .comment {
        width: 700px;
        border-radius: 12px;
        background-color: white;
        height: 200px;
        margin: 20px;
        padding: 20px;
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
            <br>
            <p style="display: inline-block; font-size: 13px;"> Chọn số lượng: </p>
            <input style="width: 35px; height: 25px; text-align: center; font-weight: bold; border-radius: 5px; border: 1px solid gray; display: blocok" placeholder="1" type="text">
            <br>
            <br>
            <button class="button">Thêm vào giỏ hàng</button>
            <button class="button">Mua trước trả sau</button>
            <button style="width: 300px; background: #EE2624; color: white;" class="button">Mua ngay</button>  
        </div>
    </div>
    <div class="details--describe">
        <div class="origin">
            phần này ghi nguồn gốc sản phẩm
        </div>
        <div class="comment">
            phần này ghi comment của khách
        </div>
    </div>

</div>      
