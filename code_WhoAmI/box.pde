void drawBox(){
  image(box, 900,70, 50,50);
  boolean intersect = false;
  boolean selected = false;
  if (mouseX > 900-25 && mouseX < 900+25 && mouseY > 100-25 && mouseY < 100+25){
    intersect = true;
   }
  else{
    intersect = false;
  }
  if (intersect == true){
    selected = true;
  }
  if (selected == true){
    m1.drawMemo1();
  }

}
