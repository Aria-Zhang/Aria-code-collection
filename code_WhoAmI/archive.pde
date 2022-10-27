class archive{
  int x, y;
  color c;
  
  archive(int _x, int _y){
    x = _x;
    y = _y;
    c = color(255);
  }

  void arch1(){
    image(box, 230, 400, 50, 50);
    boolean intersect = false;
    boolean selected = false;
    if (mouseX >230-25 && mouseX < 230+25 && mouseY > 400-25 && mouseY < 400+25){
      intersect = true;
   }
    else{
      intersect = false;
   }
    if (intersect == true){
      selected = true;
   }
    if (selected == true){
      m1.drawArchive1();
    }
  }
  
  void arch2(){
    image(box, 430, 440, 50, 50);
    boolean intersect = false;
    boolean selected = false;
    if (mouseX >430-25 && mouseX < 430+25 && mouseY > 440-25 && mouseY < 440+25){
      intersect = true;
   }
    else{
      intersect = false;
   }
    if (intersect == true){
      selected = true;
   }
    if (selected == true){
      m1.drawArchive2();
    }
  }
  
 void arch3(){
    image(box, 870, 310, 50, 50);
    boolean intersect = false;
    boolean selected = false;
    if (mouseX >870-25 && mouseX < 870+25 && mouseY > 310-25 && mouseY < 310+25){
      intersect = true;
   }
    else{
      intersect = false;
   }
    if (intersect == true){
      selected = true;
   }
    if (selected == true){
      m1.drawArchive3();
    }
  }

}
