<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <div style="display: flex;margin-top: 50px;">
        <img style="margin-right: 300px;margin-left: 100px;"src="public/img/1.png" alt="">
        <p style="margin-right: 50px;"> <img src="public/img/browser.png" alt="">TRang chu</p>
        <p style="margin-right: 50px;"> <img src="public/img/star.png" alt="">Phòng , mức giá</p>
        <p style="margin-right: 50px;"> <img src="public/img/clock.png" alt="">Đặt phòng</p>
        <p style="margin-right: 50px;"> <img src="public/img/photo.png" alt="">Hình ảnh</p>
        <p style="margin-right: 50px;"> <img src="public/img/information.png" alt="">Giới Thiệu</p>
        <p style="margin-right: 50px;"> <img src="public/img/contact.png" alt="">Liên hệ</p>
    </div>
    @foreach ($rooms as $room)
    <div class="card" style="width: 18rem;" >
        <img   class="card-img-top" src="{!! asset($room["image"]) !!}" width="30" alt="{!! $room["name"] !!}">
        <div class="card-body">
          <p class="card-text">{!! $room->typeroom !!}</p>
          <p class="card-text">Phong: &nbsp  &nbsp &nbsp  &nbsp {!! $room->name !!}</p>
          <hr>
          <p class="card-text"> Chỗ nghĩ  &nbsp &nbsp &nbsp  &nbsp{!! $room->number !!}</p>
          <hr>
          <p class="card-text"> Kích thước &nbsp &nbsp &nbsp &nbsp {!! $room->area !!}</p>
          <hr>
          <p class="card-text" ">Giá phòng  &nbsp &nbsp &nbsp &nbsp{!! number_format($room->price )!!}</p>
          <hr>
          <div class="card-body">
            <a href="#" class="card-link">Xem &nbsp</a>
            <a href="#" class="card-link">Đặt phòng</a>
          </div>

        </div>
        <br>

      </div>
      @endforeach

</body>
</html>
