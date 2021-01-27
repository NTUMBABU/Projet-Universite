//decoration ellement en httml

const imgDiv = document.querySelector('photo_profil');
const img = document.querySelector('#profile');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//selecction de la photo 
 file.addEventListener('change', function(){

  //elle va se refere sur le fichier
  const choosedFile = this.files[0];

  if (choosedFile)
  {
    const reader = new FileReader();

    reader.addEventListener('load', function()
    {
      img.setAttribute('src', reader.result);
    });
    reader.readAsDataURL(choosedFile);
  }
});
