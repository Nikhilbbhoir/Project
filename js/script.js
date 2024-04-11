const imageFile = document.getElementById('imageFile');
const imagePreview = document.getElementById('imagePreview');

imageFile.addEventListener('change', function() {
  const file = this.files[0];
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = function(e) {
      imagePreview.src = e.target.result;
      imagePreview.classList.remove('d-none'); // Show the image preview
    };
    reader.readAsDataURL(file);
  } else {
    // Handle invalid file type (optional)
    alert("Please select an image file.");
    imagePreview.src = ""; // Clear preview if invalid
    imagePreview.classList.add('d-none'); // Hide the preview
  }
});

// form sumbit 
function profile(event) {
  // Your form validation logic here
  // If validation fails, return false to prevent submission

  event.preventDefault(); // Prevent default form submission behavior
  // Handle form submission using AJAX or other methods
  return false; // Explicitly return false to avoid potential issues

}

// Next Previous page js 
const first = document.querySelector("#firstscreen")
const second = document.querySelector("#secondscreen")
const backinput = document.getElementById("back")
const nextinput = document.getElementById("next")

function backward(){
  first.style.display = 'block'
  second.style.display = 'none'
  backinput.style.display = "none"
  console.log("hi")
}
function next(){
  first.style.display = 'none'
  second.style.display = 'block'
  // second.style.position = 'absolute'
  backinput.style.display = "block"
  console.log("this is updated")
}

backinput.addEventListener('click',backward)
nextinput.addEventListener('click',next)

// Cards js 
const card1 = document.getElementById("inlineCheckbox1");
const para1 = document.getElementById("para1");
const img1 = document.getElementById("cardimg1");
const mar1 = document.getElementById("mar1");
const imgcard1 = document.getElementById("imgcard1");

const card2 = document.getElementById("inlineCheckbox2");
const para2 = document.getElementById("para2");
const img2 = document.getElementById("cardimg2");
const mar2 = document.getElementById("mar2");
const imgcard2 = document.getElementById("imgcard2");

const card3 = document.getElementById("inlineCheckbox3");
const para3 = document.getElementById("para3");
const img3 = document.getElementById("cardimg3");
const mar3 = document.getElementById("mar3");
const imgcard3 = document.getElementById("imgcard3");


function expand1(){
  if(this.checked){
    para1.style.display = 'block'
    img1.style.position = 'absolute'
    mar1.style.marginTop = '2rem'
    imgcard1.style.border = '2px solid #EA4B8B'
  }else{
    para1.style.display = 'none'
    img1.style.position = 'initial'
    mar1.style.marginTop = '0rem'
    imgcard1.style.border = 'revert-layer'
  }
}
function expand2(){
  if(this.checked){
    para2.style.display = 'block'
    img2.style.position = 'absolute'
    mar2.style.marginTop = '2rem'
    imgcard2.style.border = '2px solid #EA4B8B'
  }else{
    para2.style.display = 'none'
    img2.style.position = 'initial'
    mar2.style.marginTop = '0rem'
    imgcard2.style.border = 'revert-layer'
  }
  
}
function expand3(){
  if(this.checked){
    para3.style.display = 'block'
    img3.style.position = 'absolute'
    mar3.style.marginTop = '2rem'
    imgcard3.style.border = '2px solid #EA4B8B'
  }else{
    para3.style.display = 'none'
    img3.style.position = 'initial'
    mar3.style.marginTop = '0rem'
    imgcard3.style.border = 'revert-layer'
  }
}

card1.addEventListener('click',expand1);
card2.addEventListener('click',expand2);
card3.addEventListener('click',expand3);