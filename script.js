document.querySelectorAll('.about .controls .control-btn' ).forEach(btn =>{
    btn.onclick = () =>{
        let src = btn.getAttribute('data-src');
        document.querySelector('.about .image-container .image').src = src;
    }
});

