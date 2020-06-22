const livres = document.getElementById('livres');

if (livres) {
    livres.addEventListener('click',(e) =>{
        if (e.target.className === 'btn btn-danger delete-livre') {
            if (confirm('Voulais vous supprimer ce livre ?')) {
                const id = e.target.getAttribute("data-id");

                fetch('/livre/delete/${idLivre}',{
                    method:'DELETE'
                }).then(res => window.location.reload());
            }
        }
    });
}