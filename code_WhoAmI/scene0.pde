void drawScene0(){
  //collision
  if (y > 550){
    y = 550;
  }
  image(scene1, 0, 0, 1200, 800);
  //avatar control
  if(goRight){
    x += 7;
    image(right, x, y, sizeAva, sizeAva);
  }
  if(goLeft){
    x -= 7;
    image(left, x, y, sizeAva, sizeAva);
  }
  if(goUp){
    y -= 7;
    image(up, x, y, sizeAva, sizeAva);
  }
  if(goDown){
    y += 7;
    image(down, x, y, sizeAva, sizeAva);
  }
  if (!goRight && !goLeft && !goUp && !goDown){
    image(right, x, y, sizeAva, sizeAva);
  }
 
  //the cage
  image(cage, 380,300, 470,500);
  
  //door to escape
  image(door, doorx, doory, sizeDoor, sizeDoor);
  float d0 = dist (doorx, doory, x, y);
  if (d0 < sizeDoor/2 + sizeAva/2 - 120){
    file2.play();
    x1 = 70;
    y1 = 330;
    scene = 1;
  }
  
  //door to go back
  image(door, doorx-900, doory, sizeDoor, sizeDoor);
  float d1 = dist ((doorx-900), doory, x, y);
  if (d1 < sizeDoor/2 + sizeAva/2){
    file1.play();
    x = 500;
    y = 550;
    scene = 0;
  }
}
