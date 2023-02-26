<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
<script src="owlcarousel/jquery-3.6.0.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<h1  style="font-size: 30px; color: yellow; margin: 80px; text-align: center;" >Phim cùng thể loại có thể bạn muốn xem</h1>

<div class="owl-carousel">
  <?php
    $sql = "SELECT * FROM phim WHERE TheLoai = $theloai AND ID != $id ORDER BY LuotXem desc limit 10 ";
    $phims = mysqli_query($conn, $sql);
    while($rows = mysqli_fetch_assoc($phims)){
  ?>
  <div class="mott">
    <div class="haii">
      <a href="chitietphim.php?ID=<?=$rows['ID']?>">
          <div class="baa"><img src="admin/img/<?=$rows['Anh']?>"/></div>
          <div class="bonn"><img src="img/film.png" alt=""></div>
      </a>
    </div>
    <div><a style="color: #f3ff50fd; font-size: 20px; text-decoration:none;" href="chitietphim.php?ID=<?=$rows['ID']?>"> <?=$rows['TenPhim']?></a> </div>
    <div><a style="color: White; font-size: 14px; text-decoration:none;" href="theloai_phim.php?ID=<?=$row_tl['ID_TheLoai']?>"><?=$row_tl['TenTheLoai']?></a></div>
    <div style="color: white;font-size: 14px;">[HD-Vietsub]</div>
  </div>                    
  <?php }
  ?>
</div>
<script>
  $(document).ready(function(){
  $('.owl-carousel').owlCarousel({
  margin:10,
  nav: true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:5
      }
  }
})
});
</script>
<style>
  .owl-carousel {
    width: 930px;
    margin: 50px auto;
  }
  .owl-carousel .mott .haii .baa img {
    height: 250px;
  }
  .mott .haii .baa {
    overflow: hidden;
  }
  .mott .haii .baa img {
    display: block;
  }
  .mott .haii a{
    position: relative;
    display: block;
  }
  .mott .haii:hover img {
    transform: scale(1.1);
  }
  .mott .haii .bonn{
    position: absolute;
    left: 57px;
    bottom: 93px;
    opacity: 0;
  }
  .mott .haii:hover .bonn{
    opacity: 1;
  }
  .owl-prev, .owl-next {
    position: absolute;
    top: 32%;
    transform: translateY(-50%);
    color: #fff !important;
    font-size: 60px !important;
    font-weight: bolder !important;
  }
  .owl-prev {
    left: 0%;
    opacity: 0;
    transition: all 0.2s ease-in-out;
  }
  .owl-carousel:hover .owl-prev {
    left: 1%;
    opacity: 1;
  }
  .owl-next {
    right: 0%;
    opacity: 0;
    transition: all 0.2s ease-in-out;
  }
  .owl-carousel:hover .owl-next {
    right: 1%;
    opacity: 1;
  }
</style>


