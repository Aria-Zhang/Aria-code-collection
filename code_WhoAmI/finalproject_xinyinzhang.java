/* autogenerated by Processing revision 1277 on 2022-04-10 */
import processing.core.*;
import processing.data.*;
import processing.event.*;
import processing.opengl.*;

import processing.sound.*;

import java.util.HashMap;
import java.util.ArrayList;
import java.io.File;
import java.io.BufferedReader;
import java.io.PrintWriter;
import java.io.InputStream;
import java.io.OutputStream;
import java.io.IOException;

public class finalproject_xinyinzhang extends PApplet {



//Xinyin Zhang
//101098426
//Final project: Who Am I
//An adventure journey on human trafficking

//load image
PImage right, left, up, down;
PImage enemy, cage, box, police1, police2, npc1, npc2, npc3, npc4, door, mom, dad;
PImage opening, scene1, scene2, scene3, scene4, scene5, scene6;
PImage d1, d2, d3, d4, d5, d6, dmom, ddad;
PImage memo1, memo2, arch1, arch2, arch3;

//global variable
int scene = 5; //5 as the opening scene
int state = 0;
int sizeAva = 150;
int x = 500, x1 = 70, x2 = 500, x6 = 120;
int y = 550, y1 = 330, y2 = 550, y6 = 150;
int doorx = 900;
int doory = 430;
int sizeDoor = 350;
int ex = 300, ey = 0, e1x = 500, e1y = 700, e2x = 200, e2y = 450, e3x = 600, e3y = 200;
int speed = 6;

//boolean
boolean goRight, goLeft, goUp, goDown;


//class
npc n = new npc (0,0);
memory m1 = new memory(450, 280, 400, 500);
button b = new button(1100, 740, 130, 50, 15);
button help = new button(100, 740, 130, 50, 15);
button finish = new button(1100, 740, 130, 50, 15);
archive arc = new archive(0,0);

//sounds
SoundFile file, file1, file2, file3;

 public void setup(){
  /* size commented out by preprocessor */;
  background(255);
  noStroke();
  loadImage();
  file = new SoundFile (this, "suspense.mp3");
  file.play();
  file.amp(0.8f);
  file1 = new SoundFile (this, "alert.mp3");
  file2 = new SoundFile (this, "happy.mp3");
  file2.amp(0.8f);
  file3 = new SoundFile(this, "hope.mp3");
  file3.play();
  file3.amp(0);
 
  
}

 public void draw(){
  noStroke();
  if (scene == 0){
    drawScene0();
  }
  else if (scene == 1){
    drawScene1();
  }
  else if (scene == 2){

    drawScene2();
  }
  else if (scene == 3){
    drawScene3();
    file.stop();
  }
  else if (scene == 4){
    drawScene4();
  }
  else if (scene == 5){ //opening scene
    drawOpen();
  }
  else if (scene == 6){ //actual fifth scene
    drawScene5();
  }
  else if (scene == 7){
    drawEnding();
  }
  
  
  
}

 public void keyPressed(){
  if (key == 'd'){
    goRight = true;
  }
  if (key == 'a'){
    goLeft = true;
  }
  if (key == 'w'){
    goUp = true;
  }
  if (key == 's'){
    goDown = true;
  }

}

 public void keyReleased(){
  if (key == 'd'){
    goRight = false;
  }
  if (key == 'a'){
    goLeft = false;
  }
  if (key == 'w'){
    goUp = false;
  }
  if (key == 's'){
    goDown = false;
  }
}

 public void mousePressed(){
  b.isSelected();
  help.isSelected();
  finish.isSelected();
}

 public void mouseReleased (){
  help.selected = false;
}
class archive{
  int x, y;
  int c;
  
  archive(int _x, int _y){
    x = _x;
    y = _y;
    c = color(255);
  }

   public void arch1(){
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
  
   public void arch2(){
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
  
  public void arch3(){
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
 public void drawBox(){
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
class button {
  int x, y, w, h, r;
  int c;
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
  
   public void isIntersecting(){
    if (mouseX > x - w/2 && mouseX < x + w/2 && mouseY > y - h/2 && mouseY < y + h/2){
      c = color(255,255,196);
      intersect = true;
    }
    else {
      c = color(245,245,141);
      intersect = false;
    }
  }
  
   public void isSelected(){
    if(intersect == true){
      selected = true;
    }
  
  }
  
   public void draw(){
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
  
   public void drawHelp(){
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
  
   public void finish(){
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
 public void loadImage(){
 //images
  right = loadImage("right.png");
  left = loadImage("left.png");
  up = loadImage("up.png");
  down = loadImage("front.png");
  scene1 = loadImage("scene1.png");
  scene2 = loadImage("scene2.png");
  scene3 =loadImage("scene3.png");
  scene4 = loadImage("scene4.png");
  scene5 = loadImage("scene5.png");
  scene6 = loadImage("scene6.png");
  opening = loadImage("open.png");
  enemy = loadImage("enemy.png");
  npc1 = loadImage("npc1.png");
  npc2 = loadImage("npc2.png");
  npc3 = loadImage("npc3.png");
  npc4 = loadImage("npc4.png");
  mom = loadImage("mom.png");
  dad = loadImage("dad.png");
  police1 = loadImage("police1.png");
  police2 = loadImage("police2.png");
  cage = loadImage("cage.png");
  box = loadImage("box.png");
  door = loadImage("door.png");
  d1 = loadImage("d1.png");
  d2 = loadImage("d2.png");
  d3 = loadImage("d3.png");
  d4 = loadImage("d4.png");
  d5 = loadImage("d5.png");
  d6 = loadImage("d6.png");
  dmom = loadImage("momd.png");
  ddad = loadImage("dadd.png");
  memo1 = loadImage("memo1.png");
  memo2 = loadImage("memo2.png");
  arch1 = loadImage("archive1.png");
  arch2 =loadImage("archive2.png");
  arch3 = loadImage("archive3.png");

}
class memory{
  int x, y, w, h;
  int c;
  
  memory(int _x, int _y, int _w, int _h){
    x = _x;
    y = _y;
    w = _w;
    h = _h;
    c = color(255);
  }

   public void drawMemo1(){
    image(memo1, x-100, y-100, w, h);
  }

   public void drawMemo2(){
    image(memo2, x-100, y-100, w, h);
  }
  
   public void drawArchive1(){
    image(arch1, x-100, y-100, w, h);
  }
  
   public void drawArchive2(){
    image(arch2, x-100, y-100, w, h);
  }
  
   public void drawArchive3(){
    image(arch3, x-100, y-100, w, h);
  }

}
class npc{
  int x,y; 
  npc(int _x, int _y){
    x=_x;
    y=_y;
  }
  //scene1
   public void drawS1Npc(){
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
   public void drawS1Npc2(){
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
  
   public void drawS2Npc1(){
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
  
   public void drawS2Npc2(){
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
  
   public void drawS3Npc(){
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
      for (float i = 0.01f; i < 0.5f; i += 0.05f){
        file3.amp(i);
        i +=0.05f;
      }
    }  
  }
  
   public void drawS4Npc(){
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
  
   public void drawS4Npc1(){
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
  
   public void drawS4Npc2(){
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
 public void drawScene0(){
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
 public void drawScene1(){
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
  image(door, doorx, doory-480, sizeDoor*0.7f, sizeDoor*0.7f);
  float d0 = dist (doorx, doory-480, x1, y1);
  if (d0 < sizeDoor/2 + sizeAva/2 -120){
    file2.play();
    x2 = 500;
    y2 = 550;
    scene = 2;
  }
  image(door, doorx-600, doory+180, sizeDoor*0.7f, sizeDoor*0.7f);
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
 public void drawScene2(){
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
 public void drawScene3(){
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
 public void drawScene4(){
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
 public void drawOpen(){
  image(opening, 0, 0, 1200, 800);
  b.draw();
  b.isIntersecting();
  help.drawHelp();
  help.isIntersecting();
  
}
 public void drawScene5(){
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
 public void drawEnding(){
  background(0);
  fill(255);
  textSize(30);
  textAlign(CENTER);
  text("This story has a happy ending", 600, 200);
  text("But the real world is much more cruel than this", 600, 260);
  text("Say no to human trafficking", 600, 320);
  text("And help those victims", 600, 380);
  
  image(mom, 400, 450, 100, 100);
  image(down, 500, 470, 80, 80);
  image(npc4, 600, 470, 80, 80);
  image(dad, 700, 450, 100, 100);
}


  public void settings() { size(1200, 800); }

  static public void main(String[] passedArgs) {
    String[] appletArgs = new String[] { "finalproject_xinyinzhang" };
    if (passedArgs != null) {
      PApplet.main(concat(appletArgs, passedArgs));
    } else {
      PApplet.main(appletArgs);
    }
  }
}