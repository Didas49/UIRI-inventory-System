document.addEventListener("DOMContentLoaded", function(){
    let nav_links = document.querySelectorAll('.links');
    nav_links.forEach(function(link){
        link.addEventListener('click',function(event){
            nav_links.forEach(function(link){
                link.classList.remove('active');
            });
            link.classList.add('active');
        });
    });
});
