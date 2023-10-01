/*----------------------------------------
    Cart Button Increament/Decreament
------------------------------------------*/
let quantity_input = document.querySelectorAll('.quantity_input');
let arr = Array.from(quantity_input);

arr.map(item=>{
    item.addEventListener('click', function(e){
        if(e.target.className == 'fa-solid fa-plus'){
            e.target.parentElement.previousElementSibling.value++;
        }

        if(e.target.className == 'fa-solid fa-minus'){
            if(e.target.parentElement.nextElementSibling.value > 1){
                e.target.parentElement.nextElementSibling.value--;
            }
        }
    })
});