var imgs=document.getElementsByTagName('img')
	var a=0;
	var time=setInterval(function(){
		if (a===0) {
		imgs[1].style.opacity=1;
		imgs[2].style.opacity=0;
		imgs[0].style.opacity=0;
		a++;
		}else if(a===1){
		imgs[1].style.opacity=0;
		imgs[2].style.opacity=1;
		imgs[0].style.opacity=0;
		a++;	
		}else if(a===2){
		imgs[1].style.opacity=0;
		imgs[2].style.opacity=0;
		imgs[0].style.opacity=1;	
		a=0;
		}
	},4000)
var lianghao=document.getElementById('lianghao');
var sousuokuang=document.getElementById('sousuokuang');
var input1=document.getElementById('input1');
var str=""
	str=`<a href="https://haoma.qq.com/shop.html#num=&from=zc" class="fangdajing" id="sousuoa"  target="_blank"><div class="baosou"></div></a>`
	mmp.innerHTML=str
lianghao.onmouseover=function(){
	input1.onkeyup=function(){
	
	str=`<a href="https://haoma.qq.com/shop.html#num=${input1.value}&from=zc" class="fangdajing" id="sousuoa" target="_blank"><div class="baosou"></div></a>`
	mmp.innerHTML=str
}
	sousuokuang.style.display="block";

	
}

input1.onfocus=function(){
	sousuokuang.style.display="block";
	lianghao.onmouseout=function(){
	sousuokuang.style.display="block";
}
input1.onblur=function(){
	sousuokuang.style.display="none";

	lianghao.onmouseout=function(){
	sousuokuang.style.display="none";
}
}
}
lianghao.onmouseout=function(){
	sousuokuang.style.display="none";
}
var img1=document.getElementById('img1');
var img2=document.getElementById('img2');
var yuyan1=document.getElementById('yuyan1');
var updown=document.getElementById('updown');
updown.onmouseover=function(){
	yuyan1.style.display="block"
	img1.style.display="none"
	img2.style.display="block"
}
updown.onmouseout=function(){
	yuyan1.style.display="none"
	img2.style.display="none"
	img1.style.display="block"
}

var a=0;
var b=0;
var c=0;
var wen1=document.getElementById('wen1');
var wen2=document.getElementById('wen2');
var p1=document.getElementById('p1');
var p2=document.getElementById('p2');
var p3=document.getElementById('p3');
var p4=document.getElementById('p4');
var p5=document.getElementById('p5');
var tick=document.getElementById('tick');
wen1.onfocus=function(){
	wen1.onblur=function(){
			if(wen1.value!=""){
			p1.style.display="none"
			tick.style.display="block"
			a=1
		}else{
			p1.style.display="block"
			tick.style.display="none"
			jinggao0.style.display="block"
		}
		}
}

wen2.onfocus=function(){
	 tick1.style.display="none"
	cuowu3.style.display="none"
	cuowu2.style.display="none"
	p2.style.display="none"
	p3.style.display="block"
	p4.style.display="block"
	p5.style.display="block"
	jinggao2.style.display="block"
	jinggao3.style.display="block"
	dui1.style.display="block"
	
	wen2.onkeyup=function(){
	if(/(?!^(\d+|[a-zA-Z]+|[~!@#$%^&*?]+)$)^[\w~!@#$%^&*?]{8,16}$/.test(wen2.value)){
	dui3.style.display="block"
	jinggao3.style.display="none"
	}else{
	jinggao3.style.display="block"
	dui3.style.display="none"
	}
	if(/^[\w~!@#$%^&*?]{8,16}$/.test(wen2.value)){
	dui2.style.display="block"
	jinggao2.style.display="none"
	}else{
	jinggao2.style.display="block"
	dui2.style.display="none"
	}
	if(wen2.value.indexOf(" ")!=-1){
		 dui1.style.display="none"
		jinggao1.style.display="block"
	}else if(/^[\s]+$/g.test(wen2.value)){
		dui1.style.display="none"
	    jinggao1.style.display="block"
	}
	if(wen2.value===""){
		dui1.style.display="block"
		jinggao1.style.display="none"
	}
}
}

	

wen2.onblur=function(){
	if(wen2.value==""){
		cuowu0.style.display="block"
		p2.style.display="block"
		p3.style.display="none"
		p4.style.display="none"
		p5.style.display="none"
	}else if(wen2.value!=""){
		if(wen2.value.indexOf(" ")!=-1){
		 dui1.style.display="none"
		jinggao1.style.display="none"
		cuowu1.style.display="block"
		p3.style.display="block"
		p2.style.display="none"
		
		p4.style.display="none"
		p5.style.display="none"
	}else{
		dui1.style.display="none"
	    jinggao1.style.display="none"
	    cuowu1.style.display="none"
	    p3.style.display="none"
	    		if(/^[\w~!@#$%^&*?]{8,16}$/.test(wen2.value)){
	p4.style.display="none"
	dui2.style.display="none"
	jinggao2.style.display="none"
	cuowu2.style.display="none"
	if(/(?!^(\d+|[a-zA-Z]+|[~!@#$%^&*?]+)$)^[\w~!@#$%^&*?]{8,16}$/.test(wen2.value)){
	    // p3.style.display="none"
		p4.style.display="none"
		p5.style.display="none"
		tick1.style.display="block"
		b=1;
	}else{
	jinggao3.style.display="none"
	dui3.style.display="none"
	jinggao2.style.display="none"
	dui2.style.display="none"
	cuowu3.style.display="block"
	cuowu2.style.display="none"
	    // p3.style.display="none"
		p4.style.display="none"
		p5.style.display="block"
		p2.style.display="none"
	    p3.style.display="none"
	    tick1.style.display="none"
	}
	}else{
	p4.style.display="block"
	cuowu2.style.display="block"
	p2.style.display="none"
	p3.style.display="none"
	p5.style.display="none"
	}
	}

	}	
}
wen3.onfocus=function(){
	duanxin.style.display="block"
	tick2.style.display="none"
	shoujihao2.display="none"
	weishu1.style.display="none"
}		
wen3.onblur=function(){
	weishu1.style.display="none"
	if(/^[0-9]{11}$/.test(wen3.value)){
		duanxin.style.display="block"
		shoujihao1.style.display="block"
		shoujihao2.style.display="none"
		tick2.style.display="block"
		 fayanzhengma.style.background="#3580cb"
		 fayanzhengma.style.color="#fff"
		 fayanzhengma.innerHTML="发送短信验证码"
		  var time=null;

fayanzhengma.onclick=function(){
	clearInterval(time)
	if(/^[1][3,4,5,7,8][0-9]{9}$/.test(wen3.value)){
		duanxin.style.display="block"
		shoujihao1.style.display="block"
		shoujihao2.style.display="none"
		tick2.style.display="block"
		 fayanzhengma.style.background="#3580cb"
		 fayanzhengma.style.color="#fff"
		 var a=60
		 
		 var arr=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",1,2,3,4,5,6,7,8,9,0,"A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"]
		  time=setInterval(function(){
		 	fayanzhengma.innerHTML="等待"+a+"秒"
		 	a--;
		 	var str=""
		 	for(var i=0;i<6;i++){
		 		str+=arr[parseInt(Math.random()*(arr.length))]
		 	}
		 	if(a===53){
		 		clearInterval(time)
		 		fayanzhengma.innerHTML=str
		 		time=null;
		 	}
		 },1000)
		 
	}else{
		shoujihao1.style.display="none"
		shoujihao2.style.display="block"
		duanxin.style.display="block"
		tick2.style.display="none"
		 fayanzhengma.style.background="#f0f0f0"
		 fayanzhengma.style.color="#ccc"
		 fayanzhengma.innerHTML="发送短信验证码"
	}
	ma.onblur=function(){
	if(ma.value===fayanzhengma.innerHTML){
		weishu.style.display="none"
		weishu1.style.display="block"
		c=1;	
	}else{
		weishu1.style.display="none"
		weishu.style.display="block"
	}
}	
	
}
	
	}else{
		shoujihao1.style.display="none"
		shoujihao2.style.display="block"
		duanxin.style.display="block"
		tick2.style.display="none"
		 fayanzhengma.style.background="#f0f0f0"
		 fayanzhengma.style.color="#ccc"
		 fayanzhengma.innerHTML="发送短信验证码"
	}
}	
zhuceo.onclick=function(){
	if(a+b+c===3){
		alert("注册成功")
	}
}
yanjing1.onclick=function(){
	if(wen2.type=="password"){
		wen2.type="text"
		yanjing2.style.display="block"
		yanjing1.style.display="none"
	}
yanjing2.onclick=function(){
	if(wen2.type=="text"){
		wen2.type="password"
		yanjing1.style.display="block"
		yanjing2.style.display="none"
	}

}
}

