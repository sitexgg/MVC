let	divPreloader = document.createElement('div');
	divPreloader.setAttribute('class', 'preloader');
let	divLoader = document.createElement('div');
	divLoader.setAttribute('class', 'loader');
 // Стили
let	headStyle = document.createElement('style');
let	cssPreloader = '.preloader {position: fixed; top: 0; left 0; width: 100vw; height: 100vh; background-color: white; z-index: 99999999999999999999999999999999999999; transition: 1s all; opacity: 1; visibility: visible;}';
let css2 = '.loader {width: 100px; height: 100px; background: url("/public/img/logoTwo.png"); background-size: cover; border-radius: 50%; position: absolute; left: 50%; top: 50%; transform: transtate(-50%, -50%); animation: 650ms spin infinite linear;}';
let css3 = '@keyframes spin {from{transform: translate(-50%, -50%) rotate(0deg)} to{transform: translate(-50%, -50%) rotate(180deg) scale(5)}; background: rgba(255, 255, 255, 0.5);}';

	headStyle.textContent = cssPreloader + css2 + css3;
// Добавляем элементы на страницу
	document.body.appendChild(divPreloader);
	divPreloader.appendChild(divLoader);
	document.head.appendChild(headStyle);
// Загрузка
document.body.onload = function() {
 		setTimeout(function() {
 			var preloader = document.getElementsByClassName('preloader')[0];
 			if(!preloader.classList.contains('done')) {
 				preloader.style.cssText = 'opacity: 0; visibility: hidden;';
 			}
 		}, 100);
 	}
// Удаляем преладер
setTimeout(showPreloader, 600);
function showPreloader() {
	document.body.removeChild(divPreloader);
	document.head.removeChild(headStyle);
}