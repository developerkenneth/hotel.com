
        const profileImage = document.getElementById('profile-image');
        const profilePreview = document.getElementById('profile-preview');

        profileImage.addEventListener('change', function () {

            const file = this.files[0];

            if (file) {
                profilePreview.src = URL.createObjectURL(file);
            }

        });

        // Prevent submission for now because the backend is not ready.
        document.getElementById('edit-profile-form')
            .addEventListener('submit', function (event) {
                event.preventDefault();
            });
    