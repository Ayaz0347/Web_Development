// let links = document.querySelectorAll('.link');
// links.forEach(a=> a.addEventListener('click', e => {
//     let index = links.indexOf(e.currentTarget);
//     console.log(index)
//     links.forEach(e=> e.classList.remove('active'))
//     e.currentTarget.classList.add('active')
// }))
function removeCls(cls){
    slides.forEach(w=> w.classList.remove(cls))
}
const Slides_Fade = (e)=>{
    removeCls('_Orb-active');
    for(let i=0; i<slides.length; i++) slides[i].children[0].classList.remove('_fade-down')
    if( e.currentTarget.classList.contains('_slide-right') ){
        index++;
        if(index === slides.length) index=0;
        slides[index].classList.add('_Orb-active');
        slides[index].children[0].classList.add('_fade-down');
    }
    else{
        index--;
        if(index < 0) index = slides.length-1;
        slides[index].classList.add('_Orb-active');
        slides[index].children[0].classList.add('_fade-down');
    }
}
let index=0;
let slides = document.querySelectorAll('._Orb-slider li');
let slide_btn = document.querySelectorAll('._slide-btns');
let slide_dots = document.querySelectorAll('_slide-dots span')
slide_btn.forEach(btn=> btn.addEventListener('click', Slides_Fade))
