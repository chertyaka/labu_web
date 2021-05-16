const btn = document.getElementById('val')
let h = 7.3;
let k = 3.5;
let c = 2.5;
let t = z = 0


btn.addEventListener("click", function(){
    t = h*((Math.sin(h) * Math.sin(h)) + c * (Math.cos(k) * Math.cos(k)));
    z = (h * Math.log(h**k + c) + 3);
    alert("Your answers: t = "+ String(t) + " and z = " + String(z)) 
})