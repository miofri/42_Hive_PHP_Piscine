var newList = document.querySelector("#new");
var ft_list = document.querySelector("#ft_list");

let cookies = document.cookie.split(';');
let id = document.cookie ? cookies.length : 0;

if (id > 0) {
	cookies.forEach((element) => {
		id = element.split('=')[0].trim();
		ft_list.prepend(todoList(element.split('=')[1], id));
	});
}

function todoList(input) {
	let newDiv = document.createElement("div");
	newDiv.textContent = input;
	return newDiv;
}

newList.addEventListener("click", function () {
	let listPrompt = prompt("New to-do: ");
	if (listPrompt != '') {
		// ft_list.prepend(todoList(listPrompt));
		id++;
		document.cookie = id + "=" + listPrompt;
		addToDom(listPrompt, id);
	}
})

// (function () {
// 	var cookies = document.cookie.split("; ");
// 	for (var c = 0; c < cookies.length; c++) {
// 		var d = window.location.hostname.split(".");
// 		while (d.length > 0) {
// 			var cookieBase = encodeURIComponent(cookies[c].split(";")[0].split("=")[0]) + '=; expires=Thu, 01-Jan-1970 00:00:01 GMT; domain=' + d.join('.') + ' ;path=';
// 			var p = location.pathname.split('/');
// 			document.cookie = cookieBase + '/';
// 			while (p.length > 0) {
// 				document.cookie = cookieBase + p.join('/');
// 				p.pop();
// 			};
// 			d.shift();
// 		}
// 	}
// })();
