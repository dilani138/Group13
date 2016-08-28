var imagecount = 1;
  var total=5;

  function slide(x)
  {

    var image = document.getElementById ('img');
    imagecount = imagecount +x;

    if(imagecount == 0){imagecount=5;}
    if(imagecount==5){imagecount=1;}

    image.src = "Images/"+imagecount+".jpg";

  }

  window.setInterval(function slideA()
  {

    var image = document.getElementById ('img');
    imagecount = imagecount +1;

    if(imagecount == 0){imagecount=5;}
    if(imagecount==5){imagecount=1;}

    image.src = "Images/uploadImages/"+imagecount+".jpg";

  },3000);


  function slideVideo(x)
  {


    var image = document.getElementById('video');
    imagecount = imagecount +x;

    if(imagecount == 0){imagecount=11;}
    if(imagecount== 12){imagecount=1;}

    image.src = "videos/"+imagecount+".mp4";

  }
