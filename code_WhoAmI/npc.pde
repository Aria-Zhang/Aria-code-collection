class npc{
  int x,y; 
  npc(int _x, int _y){
    x=_x;
    y=_y;
  }
  //scene1
  void drawS1Npc(){
    image(npc1, 700, 500, 150, 160);
    boolean intersect = false;
    boolean selected = false;
    if (mouseX > 700-75 && mouseX < 700+75 && mouseY > 500-80 && mouseY < 500+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(d1, 200, 120, 800,100);
      
    }
   
  }
  void drawS1Npc2(){
    boolean intersect = false;
    boolean selected = false;
    image(npc3, 1050, 500, 160, 160);
    if (mouseX > 1050-75 && mouseX < 1050+75 && mouseY > 500-80 && mouseY < 500+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
     image(d2, 200, 120, 800,100);
    }
  
  }
  
  void drawS2Npc1(){
    boolean intersect = false;
    boolean selected = false;
    image(police1, 100, 600, 160, 160);
    if (mouseX > 100-75 && mouseX < 600+75 && mouseY > 600-80 && mouseY < 600+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(d4, 200, 120, 800,100);
    }
    
  }
  
  void drawS2Npc2(){
    boolean intersect = false;
    boolean selected = false;
    image(npc2, 700, 300, 160, 160);
    image(police1, 100, 600, 160, 160);
    if (mouseX > 700-75 && mouseX < 700+75 && mouseY > 300-80 && mouseY < 300+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(d3, 200, 120, 800,100);
    }
  
  }
  
  void drawS3Npc(){
    image(police2, 850, 300, 160, 160);
    boolean intersect = false;
    boolean selected = false;
     if (mouseX > 850-75 && mouseX < 850+75 && mouseY > 300-80 && mouseY < 300+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(d5, 200, 120, 800, 100);
      for (float i = 0.01; i < 0.5; i += 0.05){
        file3.amp(i);
        i +=0.05;
      }
    }  
  }
  
  void drawS4Npc(){
    image(npc4, 660, 450, 160,160);
    boolean intersect = false;
    boolean selected = false;
     if (mouseX > 660-75 && mouseX < 660+75 && mouseY > 450-80 && mouseY < 450+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(d6, 200, 120, 800, 100);
    }  
  }
  
  void drawS4Npc1(){
    image(mom, 790, 550, 160,160);
    boolean intersect = false;
    boolean selected = false;
     if (mouseX > 790-75 && mouseX < 790+75 && mouseY > 550-80 && mouseY < 550+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(dmom, 200, 120, 800, 100);
    }  
  }
  
  void drawS4Npc2(){
    image(dad, 900, 500, 160,160);
    boolean intersect = false;
    boolean selected = false;
     if (mouseX > 900-75 && mouseX < 900+75 && mouseY > 500-80 && mouseY < 500+80){
      intersect = true;
    }
    else{
      intersect = false;
    }
    if (intersect == true){
      selected = true;
    }
    if (selected == true){
      image(ddad, 200, 120, 800, 100);
    }  
  }


}
