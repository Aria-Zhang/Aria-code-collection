class memory{
  int x, y, w, h;
  color c;
  
  memory(int _x, int _y, int _w, int _h){
    x = _x;
    y = _y;
    w = _w;
    h = _h;
    c = color(255);
  }

  void drawMemo1(){
    image(memo1, x-100, y-100, w, h);
  }

  void drawMemo2(){
    image(memo2, x-100, y-100, w, h);
  }
  
  void drawArchive1(){
    image(arch1, x-100, y-100, w, h);
  }
  
  void drawArchive2(){
    image(arch2, x-100, y-100, w, h);
  }
  
  void drawArchive3(){
    image(arch3, x-100, y-100, w, h);
  }

}
