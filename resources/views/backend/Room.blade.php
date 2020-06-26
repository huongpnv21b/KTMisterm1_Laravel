<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

    <form method='post' enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label> Enter name room</label>
            <input  class="form-control" type="text" name="inputName" placeholder="Name"><br>
        </div>
        <div class="form-group">
            <label> Enter Type Room</label>
            <input  class="form-control" type="text" name="inputTyperoom" placeholder="Type Room"><br>
        </div>
        <div class="form-group">
            <label> Enter Number </label>
            <input   class="form-control" type="text" name="inputNumber" placeholder=" Number"><br>

        </div>
        <div class="form-group">
            <label> Enter Area</label>
            <input  class="form-control" type="text" name="inputArea" placeholder="Area"><br>

        </div>
        <div class="form-group">
            <label> Enter Price</label>
            <input  class="form-control" type="text" name="inputPrice" placeholder="Price"><br>

        </div>

        <input type="file" name="inputFile">
        <input type="submit" name="submit" value="Submit">
        @include('errors')
      </form>

</body>
</html>
