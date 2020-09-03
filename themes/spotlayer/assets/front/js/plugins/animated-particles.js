
// configurable:
var dotSize = 56, blurLevels=9, speed=1, particleScale=0.33;

// globals:
var c = createjs, stage, t=0, count=0, w, h, max, min;
var spriteSheet, helixes=[];


// Custom Background image --> if you want to use it uncomment the bellow code
// var bgImg = target.getContext("2d");
// var background = new Image();

// background.onload = function(){
//     bgImg.drawImage(background,0,0);   
// }


/* Objects */
function HelixParticle(spriteSheet) {
	this.Sprite_constructor(spriteSheet);
	this.t = 0;
	this.speed = 1;
	this.size = 1;
	this.altAmp = 1;
	this.altPer = 1;
}
c.extend(HelixParticle, c.Sprite);
c.promote(HelixParticle, "Sprite");


function Helix(particleCount) {
	this.Container_constructor();
	this.particleCount = particleCount||1000;
	this.set({});
	this.particles = [];
	this.createParticles();
}
var p = c.extend(Helix, c.Container);
p.set = function(o) {
	this.overscan = o.overscan==null?0.2:o.overscan;
	this.particleScale = o.particleScale||1;
	this.speed = o.speed||1;
	this.amplitude = o.amplitude==null?0.5:o.amplitude;
	this.altAmplitude = o.altAmplitude==null?0.5:o.altAmplitude;
	this.startRotation = o.startRotation||0;
	this.rotations = o.rotations==null?2:o.rotations;
}
p.createParticles = function() {
	var dots = this.particles, l=this.particleCount;
	while (l-- > 0) {
		var seed = rnd(1);
		dot = new HelixParticle(spriteSheet);
		dot.t = rnd(Math.PI);
		dot.speed = Math.pow(seed*0.5+0.5,3);
		dot.size = 1-dot.speed;
		dot.altAmp = rnd(0.1,0.6)*rnd(0,dot.speed)*(rnd(1)<0.5?-1:1);
		dot.altPer = rnd(0.3,2);
		dot.altStart = rnd(Math.PI*2);
		dot.gotoAndStop(seed*blurLevels|0);
		dots.push(dot);
		this.addChild(dot);
	}
}
p.tick = function(delta) {
	var fov = min, dots = this.particles, a0=this.amplitude*0.5, a1=this.altAmplitude*0.5, pScale=this.particleScale*particleScale;
	var rotations = this.rotations*Math.PI*2, startRotation=this.startRotation*Math.PI*2;
	var adjW = w*(1+this.overscan*2);
	for (var i=0, l=dots.length; i<l; i++) {
		var dot = dots[i], altPer=dot.altPer*Math.PI*2;
		var t = (dot.t += delta*0.0001*this.speed*speed*dot.speed)%1;
		
		// base helix shape:
		if (t < 0) { t = 1+t; }
		var x = t*adjW-adjW/2;
		
		t = x/adjW;
		var y = Math.sin(t*rotations+startRotation)*min*a0;
		var z = Math.cos(t*rotations+startRotation)*min*a0;
		
		// introduce variation:
		y += Math.sin(t*altPer+dot.altStart)*min*dot.altAmp*a1;
		z += Math.cos(t*altPer+dot.altStart)*min*dot.altAmp*a1;
		
		var s = fov/(z+fov);
		dot.x = x*s; // disable perspective on the particle positions
		dot.y = y*s;
		dot.scaleX = dot.scaleY = Math.pow(s*(1+dot.size),2)*pScale;
		dot.alpha = s-0.6;
	}
}
p.clone = function(particleCount) {
	var o = new Helix(particleCount||this.particleCount);
	this._cloneProps(o);
	o.set(this);
	return o;
}
c.promote(Helix, "Container");


/* global methods */
setup();
function setup() {
	stage = new c.StageGL("target");
	stage.tickChildren = false;
	stage.setClearColor("#201624"); // #206699
	
	window.addEventListener("resize", onResize);
	onResize();
	
	spriteSheet = generateSpriteSheet();
	
	var helix;
	
	helix = stage.addChild(new Helix(100));
	helix.x = w/2;
	helix.y = h/2;
	helix.speed = 0.1;
	helix.alpha = 0.1;
	helix.particleScale = 5;
	helix.altAmplitude = 1.6;
	helix.amplitude = 0.6;
	helix.rotations = 3;
	helixes.push(helix);
	
	helix = stage.addChild(helix.clone(150));
	helix.particleScale = 3;
	helix.rotation = -20;
	helix.speed = -0.5;
	helix.amplitude = 0.1;
	helix.altAmplitude = 2;
	helix.alpha = 0.3;
	helixes.push(helix);
	
	helix = stage.addChild(new Helix(1500));
	helix.x = w/2;
	helix.y = h/2;
	helix.amplitude = 0.4;
	helix.particleScale = 0.2;
	helix.rotation = -40;
	helix.rotations = 2.5;
	helix.speed = 2;
	helix.startRotation = 0.33;
	helixes.push(helix);
	
	helix = stage.addChild(helix.clone());
	helix.startRotation = 0.83;
	helixes.push(helix);
	
	helix = stage.addChild(helix.clone(100));
	helix.particleScale = 0.1;
	helix.speed = -3;
	helixes.push(helix);
	
	helix = stage.addChild(helix.clone());
	helix.startRotation = 0.33;
	helixes.push(helix);
	
	c.Ticker.timingMode = c.Ticker.RAF;
	c.Ticker.on("tick", tick);
}

function generateSpriteSheet() {
	// generates a 4x4 sheet of dots at different blur levels.
	var holder = new c.Container(), shape = holder.addChild(new c.Shape()), g=shape.graphics;
	var pow = Math.ceil(Math.log(dotSize*2.2)/Math.log(2)), size2 = Math.pow(2,pow);
	var rect = new c.Rectangle(-size2/2, -size2/2, size2, size2);
	var builder = new c.SpriteSheetBuilder();
	builder.padding = 0;
	builder.maxWidth = Math.ceil(Math.sqrt(blurLevels))*size2;
	for (var i=0; i<blurLevels; i++) { builder.addFrame(holder, rect, 1, prepFrame, i); }
	return builder.build();
}

function prepFrame(holder, i) {
	var shape = holder.getChildAt(0);
  var g=shape.graphics, m=i/blurLevels, r=dotSize/2*Math.pow(2-m,1.2), x=0*(1-m)*0.2*r;
	g.c().rf(["hsla("+(m*120+190)+",100%,95%,1)","hsla(270,100%,85%,0)"],[m*0.8+0.1,1],x,0,0,x,0,r).dc(0,0,r);
	shape.alpha = 0.3+0.7*m;
}

function tick(evt) {
	var d = evt.delta;
	for (var i=0,l=helixes.length; i<l; i++) { helixes[i].tick(d); }
	stage.update();
}

function rnd(min, max) {
	if (max === undefined) { max=min; min=0; }
	return Math.random()*(max-min)+min;
}

function onResize() {
	w = window.innerWidth
	h = window.innerHeight;
	max = Math.max(w,h);
	min = Math.min(w,h);
	target.width = w;
	target.height = h;
	stage.updateViewport(w,h);
	for (var i=0; i<helixes.length; i++) {
		helixes[i].x = w/2;
		helixes[i].y = h/2;
	}
	particleScale = min/1000*0.3;
	stage.update();
}
