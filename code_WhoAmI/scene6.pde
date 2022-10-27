void drawScene5(){
  image(scene6, 0, 0, 1200, 800);
  arc.arch1();
  arc.arch2();
  arc.arch3();
   //collison with wall
   if (x6 > 853){
     x6 = 853;
   }
   else if (y6 < 280){
     y6 = 280;
   }
   else if (y6 > 359){
     y6 = 359;
   }
 
   if(goRight){
     x6 += 7;
     image(right, x6, y6, sizeAva, sizeAva);
   }
   if(goLeft){
     x6 -= 7;
     image(left, x6, y6, sizeAva, sizeAva);
   }
   if(goUp){
     y6 -= 7;
     image(up, x6, y6, sizeAva, sizeAva);
   }
   if(goDown){
     y6 += 7;
     image(down, x6, y6, sizeAva, sizeAva);
   }
   if (!goRight && !goLeft && !goUp && !goDown){
     image(right, x6, y6, sizeAva, sizeAva);
   }
 
  
  image(police1, 10, 340, 160,160);
  float d1 = dist (10, 340, x6, y6);
  if (d1 < 80){
    file1.play();
    x = 500;
    y = 550;
    scene = 0;
  }
  
  
  


}
