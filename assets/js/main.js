// const menuBtn = document.querySelector('.btn-menu');
// const closeBtn = document.querySelector('.btn-close');
// const menu = document.querySelector('.menu');

// menuBtn.addEventListener('click', () => {
//     menu.classList.add('visible');
// });
  
// closeBtn.addEventListener('click', () => {
//     menu.classList.remove('visible');
// });
// https://www.youtube.com/watch?v=xG8W2rU-AgE

$(document).ready(function() {
    // Menu Navigation 
    $('.btn-menu').click(function () {
        $('.menu').addClass('visible');
    })
    $('.btn-close').click(function () {
        $('.menu').removeClass('visible')
    })
    // Auth Tab
    $('.content:first').show()
    $('.tab-nav li:first').addClass('active')
    $('.tab-nav li').click(function(event) {
        index = $(this).index();
        $('.tab-nav li').removeClass('active'); 
        $(this).addClass('active')
        $('.content').hide()
        $('.content').eq(index).show()
    })
})