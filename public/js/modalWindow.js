function modalWindow(messages) {
    showModal();
	// Модальное окно
	function showModal() {
		// Контейнер для модального окна
		let modalDiv = document.createElement('div');
		// Modal
		let	divContent = document.createElement('div');
			divContent.style.cssText = 'background-color: rgb(254, 254, 254); position: relative;'+
			'margin: 8px auto;'+
			'padding: 2rem;'+
			'border: 1px solid rgb(136, 136, 136);'+
			'width: 80%;'+
			'border-radius: 6px;'+
			'height: auto;';
			divContent.classList = 'showModal';
		// Close button 
		let	closeSpan = document.createElement('span');
			closeSpan.textContent = 'X';
			closeSpan.classList = 'closeSpan';
			closeSpan.style.cssText = 'overflow: auto;'+
			'margin: 0;'+
			'margin-top: -1rem;'+
			'user-select: none;'+
			'position: relative;'+
			'z-index: 99999999;'+
			'font-family: sans-serif;'+
			'color: rgb(136, 136, 136);'+
			'float: right;'+
			'font-size: 2em;'+
			'font-weight: bold;';
		// Text window
		let	modalP = document.createElement('p');
			modalP.style.textAlign = 'center';
			modalP.style.color = 'black';
			modalP.textContent = messages;
		let style = document.createElement('style');
			animation = '@keyframes showModalAnim { 0% {top: -500px;} 70% {top: 8px;}} .showModal {animation: showModalAnim 0.3s linear;} '+
			'.closeSpan {transition-duration: 200ms;} .closeSpan:hover {color: rgb(66, 66, 66)!important; cursor: pointer;}';
			// Append elements
		style.innerText = animation;
		document.body.appendChild(style);
		document.body.appendChild(modalDiv);
		modalDiv.appendChild(divContent);
		divContent.appendChild(closeSpan);
		divContent.appendChild(modalP);

		modalDiv.style.cssText = 'position: fixed;'+
		'z-index: 999;'+
		'left: 0;'+
		'top: 0;'+
		'width: 100vw;'+
		'height: 100vh;'+
		'transition-duration: 500ms;'+
		'owerflow: auto;'+
		'background-color: rgba(0, 0, 0, 0.5);';

		// Close click button
		closeSpan.addEventListener('click', closeBtn);
		function closeBtn() { 
			document.body.removeChild(modalDiv);
		}
		// Close click window
		window.onclick = function(event) {
			if(event.target == modalDiv) {
				document.body.removeChild(modalDiv);
			}
		}
	}
}
