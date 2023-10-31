<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
#container {
      width: 300px;
      /* height: 200px; */
      border: 1px solid #ccc;
      overflow-x: scroll;
    }

    #content {
      width: 500px;
      background-color: #ccc;
    }
    </style>
</head>
<body>
    <div id="container">
      <div id="content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac luctus odio. Vivamus consequat nunc tellus. Nulla accumsan, velit id eleifend sodales, mi mauris malesuada erat, at aliquam dui libero at dui. Morbi tincidunt mi eget tempus imperdiet. Aenean tincidunt vitae sapien sit amet condimentum. Pellentesque vel elementum ex. Integer pretium vulputate turpis, sit amet pellentesque quam ornare eget. In quam erat, pharetra cursus lectus quis, mattis venenatis ipsum. Mauris venenatis erat in ipsum posuere imperdiet. Nunc ut enim egestas, ultricies tortor non, hendrerit sapien.
      </div>
    </div>
    <button id="slideLeft" type="button">Slide left</button>
    <button id="slideRight" type="button">Slide right</button>
    <script>
        const buttonRight = document.getElementById('slideRight');
        const buttonLeft = document.getElementById('slideLeft');

        buttonRight.onclick = function () {
        document.getElementById('container').scrollLeft += 100;
        };
        buttonLeft.onclick = function () {
        document.getElementById('container').scrollLeft -= 100;
        };
    </script>
</body>
</html>