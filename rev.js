function loadPhotos() {
    fetch('get_photos.php')
        .then(response => response.json())
        .then(data => {
            const gallery = document.getElementById('photo-gallery');

            gallery.innerHTML = '';

            data.forEach(photo => {
                const photoDiv = document.createElement('div');
                photoDiv.innerHTML = `
                <p>${photo.name}</p>
                <p>${photo.review}</p>
                `
                gallery.appendChild(photoDiv);
            });
        });
}

loadPhotos();