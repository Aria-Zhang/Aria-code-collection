void drawScene2(){
  image(scene3, 0, 0, 1200, 800);
  if(goRight){
    x2 += 7;
    image(right, x2, y2, sizeAva, sizeAva);
  }
  if(goLeft){
    x2 -= 7;
    image(left, x2, y2, sizeAva, sizeAva);
  }
  if(goUp){
    y2 -= 7;
    image(up, x2, y2, sizeAva, sizeAva);
  }
  if(goDown){
    y2 += 7;
    image(down, x2, y2, sizeAva, sizeAva);
  }
  if (!goRight && !goLeft && !goUp && !goDown){
    image(right, x2, y2, sizeAva, sizeAva);
  }
  
  //door
  image(door, doorx-50, doory+100, sizeDoor, sizeDoor);
  float d0 = dist (doorx-50, doory+100, x2, y2);
  if (d0 < sizeDoor/2 + sizeAva/2 -140){
    file2.play();
    x = 600;
    y = 600;
    scene = 3;
  }
  image(door, doorx-900, doory-380, sizeDoor, sizeDoor);
  float d1 = dist (doorx-900, doory-380, x2, y2);
  if (d1 < sizeDoor/2 + sizeAva/2 -120){
    x6 = 140;
    y6 = 150;
    scene = 6;
  }
  
  //npc
  n.drawS2Npc1();
  n.drawS2Npc2();
  drawBox();
}
