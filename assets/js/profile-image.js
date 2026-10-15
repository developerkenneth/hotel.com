
const profileImageInput = document.getElementById('profile-image-upload');
const profileImagePreview = document.getElementById('profile-page-image');
const updatePictureButton = document.getElementById('update-profile-picture');

if (profileImageInput && profileImagePreview && updatePictureButton) {

    profileImageInput.addEventListener('change', function () {
        const file = this.files[0];

        if (!file) {
            return;
        }

        const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];

        if (!allowedTypes.includes(file.type)) {
            alert('Please select a JPG, PNG, or WEBP image.');
            this.value = '';
            updatePictureButton.hidden = true;
            return;
        }

        profileImagePreview.src = URL.createObjectURL(file);
        updatePictureButton.hidden = false;
    });

    updatePictureButton.addEventListener('click', function () {
        alert('The preview works! We still need to connect the image upload to the backend.');
    });

}

