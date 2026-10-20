const profileImageInput = document.getElementById("profile-image-upload");
const profileImagePreview = document.getElementById("profile-page-image");
const updatePictureButton = document.getElementById("update-profile-picture");

if (profileImageInput && profileImagePreview && updatePictureButton) {
  // Preview the selected image
  profileImageInput.addEventListener("change", function () {
    const file = this.files[0];

    if (!file) {
      updatePictureButton.hidden = true;
      return;
    }

    // Allowed image types
    const allowedTypes = ["image/jpeg", "image/png", "image/webp"];

    if (!allowedTypes.includes(file.type)) {
      alert("Please select a JPG, PNG, or WEBP image.");
      this.value = "";
      updatePictureButton.hidden = true;
      return;
    }

    // Check file size (2MB maximum)
    if (file.size > 2000000) {
      alert("Image size must not exceed 2MB.");
      this.value = "";
      updatePictureButton.hidden = true;
      return;
    }

    // Display image preview
    profileImagePreview.src = URL.createObjectURL(file);
    updatePictureButton.hidden = false;
  });

  // Upload the selected profile picture
  updatePictureButton.addEventListener("click", async function () {
    const file = profileImageInput.files[0];

    if (!file) {
      alert("Please select a profile picture first.");
      return;
    }

    const formData = new FormData();
    formData.append("profile_image", file);

    try {
      updatePictureButton.disabled = true;
      updatePictureButton.innerHTML = "Uploading...";

      const response = await fetch("/hotel.com/user/update-picture", {
        method: "POST",
        body: formData,
      });

      const result = await response.json();

      if (response.ok && result.success) {
        alert(result.message);

        // Display the uploaded image from the server
        profileImagePreview.src = `/hotel.com/assets/images/profiles/${result.picture}`;

        updatePictureButton.hidden = true;
        profileImageInput.value = "";
      } else {
        alert(
          result.message ||
            "Failed to update profile picture. Please try again.",
        );
      }
    } catch (error) {
      console.error(error);
      alert("Something went wrong while uploading your picture.");
    } finally {
      updatePictureButton.disabled = false;
      updatePictureButton.innerHTML =
        '<i class="fa-solid fa-check"></i> Update Picture';
    }
  });
}
