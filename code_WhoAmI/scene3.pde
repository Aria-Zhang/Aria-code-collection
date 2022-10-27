void drawScene3(){
  image(scene4, 0, 0, 1200, 800);
  if(goRight){
    x += 7;
    image(right, x, y+40, sizeAva, sizeAva);
  }
  if(goLeft){
    x -= 7;
    image(left, x, y+40, sizeAva, sizeAva);
  }
  if(goUp){
    y -= 7;
    image(up, x, y+40, sizeAva, sizeAva);
  }
  if(goDown){
    y += 7;
    image(down, x, y+40, sizeAva, sizeAva);
  }
  if (!goRight && !goLeft && !goUp && !goDown){
    image(right, x, y+40, sizeAva, sizeAva);
  }
  
  //enemy
   //enemy1
  image(enemy, e2x, e2y, 120, 120);
  if (state == 0){
    e2x += speed;
    if (e2x > width - 140){
      state = 1;
    }
  }
  else if (state == 1){
    e2x -= speed;
    if (e2x < 60){
      e2x = 60;
      state = 0;
    }
  }
  
  //enemy2
  image(enemy, e3x, e3y, 120, 120);
  if (state ==0){
    e3x -=speed;
    if (e3x < 60){
      e3x = 60;
      state =1;
    }
  }
  else if (state == 1){
    e3x += speed;
    if (e3x > width -140){
       e3x = width - 140;
       state = 0;
    }
  }
   //go back to origin if meets enemy
  float d0 = dist(e2x, e2y, x, y);
  if (d0 < sizeAva/2){
    file2.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  float d1 = dist(e3x, e3y, x, y);
  if (d1 < sizeAva/2){
    file2.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  
   //memory box
  image(box, 200, 600, 50,50);
  boolean intersect = false;
  boolean selected = false;
  if (mouseX > 200-25 && mouseX < 200+25 && mouseY > 600-25 && mouseY < 600+25){
    intersect = true;
   }
  else{
    intersect = false;
  }
  if (intersect == true){
    selected = true;
  }
  if (selected == true){
    m1.drawMemo2();
  }
  
  //door
  image(door, doorx-500, doory-500, sizeDoor, sizeDoor);
    float d2 = dist (doorx-500, doory-500, x, y);
  if (d2 < sizeDoor/2 + sizeAva/2 -80){
    file2.play();
    x = 100;
    y = 500;
    scene = 4;
  }
  
   n.drawS3Npc();

}
