void drawScene1(){
  image(scene2, 0, 0, 1200, 800);
  //collision 
  if (x1 < 170){
    if (y1 < 310){
    y1 = 310;
    }
    else if (y1 >350){
      y1 = 350;
    }
  } 
  if (y1 < 310){
    if (x1 < 170){
      x1 = 170;
    }
  }
  else if (y1 > 350){
    if (x1 < 170){
      x1 =170;
    }
  }
  
  
  if(goRight){
    x1 += 7;
    image(right, x1, y1, sizeAva, sizeAva);
  }
  if(goLeft){
    x1 -= 7;
    image(left, x1, y1, sizeAva, sizeAva);
  }
  if(goUp){
    y1 -= 7;
    image(up, x1, y1, sizeAva, sizeAva);
  }
  if(goDown){
    y1 += 7;
    image(down, x1, y1, sizeAva, sizeAva);
  }
  if (!goRight && !goLeft && !goUp && !goDown){
    image(right, x1, y1, sizeAva, sizeAva);
  }
  
  //enemy1
  image(enemy, ex, ey, 120, 120);
  if (state == 0){
    ey += speed;
    if (ey > height - 140){
      state = 1;
    }
  }
  else if (state == 1){
    ey -= speed;
    if (ey < 60){
      ey = 60;
      state = 0;
    }
  }
  
  //enemy2
  image(enemy, e1x, e1y, 120, 120);
  if (state ==0){
    e1y -=speed;
    if (e1y < 60){
      e1y = 60;
      state =1;
    }
  }
  else if (state == 1){
    e1y += speed;
    if (e1y > height -140){
       e1y = height - 140;
       state = 0;
    }
  }
  
  //go back to origin if meets enemy
  float d3 = dist(ex, ey, x1, y1);
  if (d3 < sizeAva/2){
    file2.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  float d4 = dist(e1x, e1y, x1, y1);
  if (d4 < sizeAva/2){
    file2.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  
  //doors
  image(door, doorx, doory-480, sizeDoor*0.7, sizeDoor*0.7);
  float d0 = dist (doorx, doory-480, x1, y1);
  if (d0 < sizeDoor/2 + sizeAva/2 -120){
    file2.play();
    x2 = 500;
    y2 = 550;
    scene = 2;
  }
  image(door, doorx-600, doory+180, sizeDoor*0.7, sizeDoor*0.7);
    float d1 = dist (doorx-600, doory+180, x1, y1);
  if (d1 < sizeDoor/2 + sizeAva/2 -120){
    file1.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  
  //npc
  n.drawS1Npc();
  n.drawS1Npc2();
  

  
}
