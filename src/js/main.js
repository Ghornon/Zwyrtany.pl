const renderGrid = () => {

	const items = document.getElementById('grid').children;

	let cols, newLeft, newTop;

	if (window.innerWidth > 1200) {

		cols = 4;
		newLeft = 0;
		newTop = 0;

	} else if (window.innerWidth <= 1200 && window.innerWidth > 768) {

		cols = 3;
		newLeft = 0;
		newTop = 0;

	}

	if (window.innerWidth <= 768) {

		for (let i = 0; i < items.length; i++) {

			items[i].style.position = 'relative';
			items[i].style.top = '0px';
			items[i].style.left = '0px';

		}

	} else {

		for (let i = 0; i < items.length; i++) {

			items[i].style.position = 'absolute';
			
			if (i == 0) {

				items[i].style.top = '0px';
				items[i].style.left = '0px';

			} else {

				if (i % cols == 0) {
		
					newTop = items[i - cols].offsetTop + items[i - cols].offsetHeight;
					items[i].style.top = newTop + "px";
		
				} else {
		
					if (items[i - cols]) {
						newTop = items[i - cols].offsetTop + items[i - cols].offsetHeight;
						items[i].style.top = newTop + "px";
					}
		
					newLeft = items[i - 1].offsetLeft + items[i - 1].offsetWidth;
					items[i].style.left = newLeft + "px";
		
				}

			}
	
		}

	}

};

const showImage = (event) => {

	event.preventDefault();

};

window.addEventListener("load", renderGrid);
window.addEventListener("resize", renderGrid);

/* const $imgButtons = document.getElementsByClassName('btn-img');

Object.keys($imgButtons).forEach((key) => {
	$imgButtons[key].addEventListener('click', showImage);
}); */