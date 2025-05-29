function loadPhotos() {
    fetch('get_photos.php')
        .then(response => response.json())
        .then(data => {
            const gallery = document.getElementById('login-container');

            gallery.innerHTML = '';

            data.forEach(photo => {
                const photoDiv = document.createElement('div');
                photoDiv.innerHTML = `
                <p >${photo.title}</p>
                <img src="uploads/${photo.photo_name}" width="200">
                <p>${photo.comment}</p>
                <p>${photo.created_at}</p>
                `
                photoDiv.innerHTML += `<a href="index.php" class="other">Назад</a>`
                gallery.appendChild(photoDiv);
            });
        });
}

loadPhotos();
