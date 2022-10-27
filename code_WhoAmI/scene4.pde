void drawScene4(){
  image(scene5, 0, 0, 1200, 800);
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
  
  n.drawS4Npc();
  n.drawS4Npc1();
  n.drawS4Npc2();
  finish.finish();
  finish.isIntersecting();
}
