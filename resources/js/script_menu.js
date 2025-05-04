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

// let thisPage=1;
// let limit=8;
// let list= document.querySelectorAll('.list .item');
// function loadItem(){
//     let beginGet = limit * (thisPage-1);
//     let endGet = limit * thisPage -1;
//     list.forEach((item,key)=>{
//         if(key >=beginGet && key <= endGet)
//         {
//             item.style.display ='block';
//         }
//         else
//         {
//             item.style.display = 'none';
//         }
//     })
//     listPage();
// }
// loadItem();
// function listPage(){
//     let count = Math.ceil(list.length / limit);
//     document.querySelector('.listPage').innerHTML= '';

//     if(thisPage!=1)
//     {
//         let prev = document.createElement('li');
//         prev.innerText = 'PREV';
//         prev.setAttribute('onclick',"chancePage(" + (thisPage - 1) +")");
//         document.querySelector('.listPage').appendChild(prev);
//     }

//     for(i = 1; i <= count ; i++)
//     {
//         let newPage = document.createElement('li');
//         newPage.innerText = i;
//         if(i==thisPage)
//         {
//             newPage.classList.add('active');
//         }
//         newPage.setAttribute('onclick',"chancePage(" +  i + ")");
//         document.querySelector('.listPage').appendChild(newPage);
//     }
//     if(thisPage!=count)
//     {
//         let next = document.createElement('li');
//         next.innerText = 'NEXT';
//         next.setAttribute('onclick',"chancePage(" + (thisPage + 1) +")");
//         document.querySelector('.listPage').appendChild(next);
//     }
// }
// function chancePage(i){
//     thisPage=i;
//     loadItem();
// }