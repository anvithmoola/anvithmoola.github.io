//imageContainer
const imageContainer = document.querySelector(".image-container")

//prevBtn
const prevBtn = document.getElementById("prev")

//homeBtn
const homeBtn = document.getElementById("home")

//nextBtn
const nextBtn = document.getElementById("next")

//console.log(imageContainer);
//console.log(prevBtn);
//console.log(nextBtn);

let x = 0;

prevBtn.addEventListner('click', () => {
	x = x + 45;
	rotate();
})

homeBtn.addEventListner('click', () => {
	<p><a href="/anvith/index.html"><button class="button">Home</button></a></p>
})

nextBtn.addEventListner('click', () => {
	x = x - 45;
	rotate();
})

function rotate(){
	imageContainer.style.transform = 'perspective(1000px) rotateY(${x}deg)'
}
