function readImage() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-1").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_1").addEventListener("change", readImage, false);


function readImage2() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-2").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_2").addEventListener("change", readImage2, false);

function readImage3() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-3").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_3").addEventListener("change", readImage3, false);

function readImage4() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-4").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_4").addEventListener("change", readImage4, false);

function readImage5() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-5").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_5").addEventListener("change", readImage5, false);


function readImage6() {
  if (this.files && this.files[0]) {
      var file = new FileReader();
      file.onload = function(e) {
          document.getElementById("preview-6").src = e.target.result;
      };       
      file.readAsDataURL(this.files[0]);
  }
}
document.getElementById("img_6").addEventListener("change", readImage6, false);
