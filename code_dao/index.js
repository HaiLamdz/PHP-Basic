imgindex = 0;
function img(){
    let headerimg = document.getElementsByClassName('headerimg');
    for (let i = 0; i < headerimg.length; i++) {
        headerimg[i].style.display = 'none'        
    }
    imgindex++;
    if(imgindex > headerimg.length){
        imgindex = 1
    }
    headerimg[imgindex - 1].style.display = 'block';
    setTimeout(img, 7000);

}
img();