//Slug automático
    document.getElementById("titulo").addEventListener('keyup', slugChange);

        function slugChange(){
    
        titulo = document.getElementById("titulo").value;
        document.getElementById("slug").value = slug(titulo);
        }

        function slug (str) {
        var $slug = '';
        var trimmed = str.trim(str);
        $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
        return $slug.toLowerCase();
        }

    //Cambiar imagen
    document.getElementById("file").addEventListener('change', cambiarImagen);

    function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result); 
    };

    reader.readAsDataURL(file);
}