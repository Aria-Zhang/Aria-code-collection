class button {
  int x, y, w, h, r;
  color c;
  boolean intersect = false;
  boolean selected = false;

  button(int _x, int _y, int _w, int _h, int _r){
    x = _x;
    y = _y;
    w = _w;
    h = _h;
    r = _r;
    c = color(245,245,141);
  }
  
  void isIntersecting(){
    if (mouseX > x - w/2 && mouseX < x + w/2 && mouseY > y - h/2 && mouseY < y + h/2){
      c = color(255,255,196);
      intersect = true;
    }
    else {
      c = color(245,245,141);
      intersect = false;
    }
  }
  
  void isSelected(){
    if(intersect == true){
      selected = true;
    }
  
  }
  
  void draw(){
    rectMode(CENTER);
    if(intersect == true) {
      c = color(255,255,196);
    }
    else {
      c = color(245,245,141);
    }
    if(selected == true){
      c = color (196, 196,63);
      scene = 0;
    }
    fill(c);
    stroke(196);
    strokeWeight(3);
    rect(x, y, w, h, r);
    fill(108);
    textSize(35);
    text("Start", 1060, 750);
  }
  
  void drawHelp(){
    rectMode(CENTER);
    if(intersect == true) {
      c = color(255,255,196);
    }
    else {
      c = color(245,245,141);
    }
    if(selected == true){
      c = color (196, 196,63);
      fill(255);
      rect(600, 400, 300, 400);
      fill(97);
      textSize(25);
      text("Operation", 550, 240);
      textSize(20);
      text("W, A, S, D control avatar", 470, 290);
      text("Hover on NPC and talk to them", 470, 340);
      text("Try to avoid enemies", 470, 390);
    }
    fill(c);
    stroke(196);
    strokeWeight(3);
    rect(x, y, w, h, r);
    fill(108);
    textSize(35);
    text("Help", 70, 750);
  }
  
  void finish(){
    rectMode(CENTER);
    if(intersect == true) {
      c = color(255,255,196);
    }
    else {
      c = color(245,245,141);
    }
    if(selected == true){

      c = color (196, 196,63);
      scene = 7;
    }
    fill(c);
    stroke(196);
    strokeWeight(3);
    rect(x, y, w, h, r);
    fill(108);
    textSize(35);
    text("Finish", 1060, 750);
  }

}
