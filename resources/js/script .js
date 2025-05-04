const menubar =document.querySelector(".menu-bar")
menubar.addEventListener("click",function(){
    menubar.classList.toggle("active")
    document.querySelector(".menu-items").classList.toggle("active")

})
// const toP=document.querySelector(".top")
// window.addEventListener("scrollY",function(){
//     const x=this.pageYOffset;
//     if(x>80){toP.classList.add("active")}
//     else{top.classList.remove("active")}

// })

