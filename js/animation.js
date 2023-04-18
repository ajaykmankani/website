let screenPosition = window.innerHeight+100;

console.log(screenPosition);

let element1 = document.getElementById('fadeup1');
let element2 = document.getElementById('fadeup2');
let element3 = document.getElementById('fadeup3');





window.addEventListener('scroll', function(){


    let position1 = element1.getBoundingClientRect().top;
  if (position1 < screenPosition) {
    element1.classList.add('slide-right');
  }



  let position2 = element2.getBoundingClientRect().top;

  if (position2 < screenPosition) {


    element2.classList.add('slide-left');

  }



  let position3 = element3.getBoundingClientRect().top;
  if (position3 < screenPosition) {
    element3.classList.add('slide-right');
  }
})