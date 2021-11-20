 //phần slide chuyển động //
 var counter = 1;
 setInterval(function(){
     document.getElementById('bottom' + counter).checked = true;
     counter++;
     if(counter > 4){
         counter = 1;
     }
 }, 5000);
// phần chuyển anime//
//thong bao corfirm//

var checkmenu = document.querySelector('.ti-home');
var checkmenu1 = document.querySelector('.ti-gallery');
var checkmenu2 = document.querySelector('.ti-shift-left');

checkmenu.onclick = function(){
    checkmenu.style.color = 'rgb(207, 208, 221)';
   
}
checkmenu1.onclick = function(){
    checkmenu1.style.color = 'rgb(207, 208, 221)';
   
}
checkmenu2.onclick = function(){
    checkmenu2.style.color = 'rgb(207, 208, 221)';
   
}
// phan javajs cho login///
