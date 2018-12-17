
laixi.onmouseover=function(){
	nvxing.style.display="block";
}
nvxing.onmouseout=function(){
	nvxing.style.display="none";
}
pingtai.onmouseover=function(){
  pingtai.style.color="red"
}
pingtai.onmouseout=function(){
  pingtai.style.color="#464646"
}

var lis=document.getElementsByClassName("lis");
// for(var i=0;i<lis.length;i++){
//     lis[i].onmouseover=function(){
//         for(var k=0;k<lis.length;k++){
//         lis[k].style.color="#6d99c5";
//         lis[k].style.borderBottom="none";
//     }
//       this.style.color="orange";
//       this.style.borderBottom="4px solid orange";
//     }
// }
$(".lis").mouseover(function(){
$(".lis_box").css("display","none").eq($(this).index()).css("display","block")
});
$(".lis").mouseover(function(){
$(".lis").css("borderBottom","").css("color","#6d99c5").eq($(this).index()).css("borderBottom","4px solid orange").css("color","orange")
});


var olis=document.getElementsByClassName("olis")
// for(var i=0;i<lis.length;i++){
//     lis[i].onmouseover=function(){
//         for(var k=0;k<lis.length;k++){
//         lis[k].style.color="#6d99c5";
//         lis[k].style.borderBottom="none";
//     }
//       this.style.color="orange";
//       this.style.borderBottom="4px solid orange";
//     }
// }
$(".olis").mouseover(function(){
  $(".shipin").css("display","none").eq($(this).index()).css("display","block")
}); 
$(".olis").mouseover(function(){
  $(".olis").css("color","#a499b0").css("borderBottom","").eq($(this).index()).css("borderBottom","4px solid orange").css("color","orange")
});


 var olisto=document.getElementsByClassName("olisto")
 // for(var i=0;i<olisto.length;i++){
 //    olisto[i].onmouseover=function(){
 //      for(var k=0;k<olisto.length;k++){
 //        olisto[k].style.color="#999";
 //        olisto[k].style.borderBottom="none";
 //      }
 //      this.style.color="#333333";
 //      this.style.borderBottom="4px solid #f3c258";
 //    }
 // }
 $(".olisto").mouseover(function(){
$(".shenmengxi").css("display","none").eq($(this).index()).css("display","block")
});
  $(".olisto").mouseover(function(){
         $(".olisto").css("borderBottom","").css("color","#999").eq($(this).index()).css("borderBottom","4px solid #f3c258").css("color","#333")
    })


 var s1=document.getElementsByClassName("s1")
 // for(var i=0;i<s1.length;i++){
 //  s1[i].onmouseover=function(){
 //    for(var k=0;k<s1.length;k++){
 //      s1[k].style.color="#333";
 //    }
 //    this.style.color="orange"
 //  }
 // }
 //  for(var i=0;i<s1.length;i++){
 //  s1[i].onmouseout=function(){
 //    for(var k=0;k<s1.length;k++){
 //      s1[k].style.color="#333";
 //    }
 //    this.style.color="#333"
 //  }
 // }
 $(".s1").mouseover(function(){
  $(".s1").css("color","").eq($(this).parent().index()).css("color","orange")
 });
  $(".s1").mouseout(function(){
  $(".s1").css("color","#333").eq($(this).index()).css("color","#333")
 });


 var ali=document.getElementsByClassName("ali")
 for(var i=0;i<ali.length;i++){
    ali[i].onmouseover=function(){
      for(var k=0;k<ali.length;k++){
       ali[k].style.color="#999";
        ali[k].style.borderBottom="none";
      }
      this.style.color="#333333";
      this.style.borderBottom="4px solid #f3c258";
    }
 }


 var lib=document.getElementsByClassName("lib")
 for(var i=0;i<lib.length;i++){
  lib[i].onmouseover=function(){
    for(var k=0;k<lib.length;k++){
      lib[k].style.color="#333";
    }
    this.style.color="orange"
  }
 }
  for(var i=0;i<lib.length;i++){
  lib[i].onmouseout=function(){
    for(var k=0;k<lib.length;k++){
      lib[k].style.color="#333";
    }
    this.style.color="#333"
  }
 }
 $.ajax({
   type:"post",
   url:"1.php",
   data:{
      user: "aa",
      password:123
   },
   success:function(res){
      
       console.log(res)
   }
})



 


