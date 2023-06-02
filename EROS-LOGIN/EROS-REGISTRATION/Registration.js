function previewFile() {
    const fileInput = document.getElementById('file');
    const previewImage = document.createElement('img');
    previewImage.style.maxWidth = '100%';
  
    fileInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      const reader = new FileReader();
  
      reader.addEventListener('load', (event) => {
        previewImage.src = event.target.result;
      });
  
      reader.readAsDataURL(file);
    });
  
    const photoContainer = document.querySelector('.photo');
    photoContainer.appendChild(previewImage);
  }
  
  previewFile();