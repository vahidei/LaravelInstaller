window.addEventListener('load', function(){
    let form = document.getElementById('form-installer');
    form.addEventListener('submit', function(e){
        if(!form.checkValidity()){
            form.classList.add('was-validated');
            e.preventDefault();
        }else{
            form.classList.remove('was-validated');
        }
    });
})