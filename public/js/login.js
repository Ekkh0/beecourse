window.onload=function(){
    var checkbox = document.querySelector("input[id=reg-log]");
    var threedchild = document.getElementById("3d-rotate-wrap-child");
    var page = 0;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    var submitRegis = document.getElementById("submitregis");
    
    checkbox.addEventListener('change', function() {
        if(this.checked) threedchild.setAttribute("style", "transform: rotateY(180deg)")
        else threedchild.setAttribute("style", "transform: rotateY(0deg)")
    });

    function changeEvent(){
        if(page==0){
            prev.setAttribute("style", "display: none;");
            next.setAttribute("style", "display: flex;");
            submitRegis.setAttribute("style", "display: none;")
            document.getElementById("step").setAttribute("style", "display: block;")
        }else if(page==1){
            prev.setAttribute("style", "display: flex;")
            next.setAttribute("style", "display: none;")
            document.getElementById("step").setAttribute("style", "display: none;")
            submitRegis.setAttribute("style", "display: inline-flex;")
        }
    }

    var carousel = $('#form-carousel');
    var carouselItems = carousel.find('.carousel-item');

    $("#form-carousel").on('slid.bs.carousel', function (){
        page = carouselItems.siblings('.active').index();
        document.getElementById("step").innerHTML = page+1 + "/2";
        changeEvent();
    });
}