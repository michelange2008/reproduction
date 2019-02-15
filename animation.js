var s = Snap("#svgout");
var largeur = 1000;
var hauteur = 1000;
s.attr({ viewBox: "0 0 "+largeur +" "+ hauteur });
var g = s.g();
image = g.image("cerveau.svg", 0, 0, 200, 200);
var ovaire_cx = largeur/2;
var ovaire_cy = hauteur/4;
var ovaire_diamX = 40;
var ovaire_diamY = 60;
var ovaire = s.ellipse(ovaire_cx, ovaire_cy, ovaire_diamX, ovaire_diamY).attr({
  'opacity':1,
  'fill':'#deaa87',
  'fill-opacity':1,
  'stroke':'#000000',
  'stroke-width':0.88300002,
  'stroke-opacity':1
});
var cj_diam = ovaire_diamX;
var cj_x = ovaire_cx-ovaire_diamX/2;
var cj_y = ovaire_cy-ovaire_diamY/2;
var cj1 = s.ellipse(cj_x, cj_y, cj_diam, cj_diam).attr({
  'opacity':1,
  'fill':'yellow',
  'fill-opacity':1,
  'stroke':'#000000',
  'stroke-width':0.88300002,
  'stroke-opacity':1
});
var cj2 = s.ellipse(cj_x, cj_y, cj_diam/3, cj_diam/3).attr({
  'opacity':1,
  'fill':'lightgrey',
  'fill-opacity':1,
  'stroke':'#000000',
  'stroke-width':0.88300002,
  'stroke-opacity':1
});
var cj = s.group(cj1,cj2);
cj.click( function() { this.attr({'cx':500}) } );
