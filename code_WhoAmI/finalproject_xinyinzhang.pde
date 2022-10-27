import processing.sound.*;

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

void setup(){
  size(1200,800);
  background(255);
  noStroke();
  loadImage();
  file = new SoundFile (this, "suspense.mp3");
  file.play();
  file.amp(0.8);
  file1 = new SoundFile (this, "alert.mp3");
  file2 = new SoundFile (this, "happy.mp3");
  file2.amp(0.8);
  file3 = new SoundFile(this, "hope.mp3");
  file3.play();
  file3.amp(0);
 
  
}

void draw(){
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

void keyPressed(){
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

void keyReleased(){
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

void mousePressed(){
  b.isSelected();
  help.isSelected();
  finish.isSelected();
}

void mouseReleased (){
  help.selected = false;
}
