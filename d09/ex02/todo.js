var newList = document.querySelector("#new");
var ft_list = document.querySelector("#ft_list");


var cookies = document.cookie.split(';');
var id = document.cookie ? cookies.length : 0;
var cookie_id = 0;

if (id > 0) {
	cookies.forEach((element) => {
		cookie_id = element.split('=')[0].trim();
		ft_list.prepend(cookieAdd(element.split('=')[1], cookie_id));
	});
}

function cookieAdd(input, cookie_id) {
	let newDiv = document.createElement("div");
	newDiv.textContent = input;
	newDiv.setAttribute("id", cookie_id);
	newDiv.setAttribute("onclick", "delTask(" + cookie_id + ")");
	return newDiv;
}

function todoList(input, firstChild) {
	let newDiv = document.createElement("div");
	newDiv.textContent = input;
	newDiv.setAttribute("id", firstChild);
	newDiv.setAttribute("onclick", "delTask(" + firstChild + ")");
	return newDiv;
}

function delTask(id) {
	task = document.getElementById(id);
	if (confirm("Are you sure that you want to remove me?")) {
		ft_list.removeChild(task);
		document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	}
}

newList.addEventListener("click", function () {
	let listPrompt = prompt("New to-do: ");
	if (listPrompt != '') {
		let firstChild;
		if (!(ft_list.firstChild))
			firstChild = 0;
		else
			firstChild = parseInt(document.getElementById("ft_list").firstChild.id);
		firstChild = firstChild + 1;
		document.cookie = firstChild + "=" + listPrompt;
		ft_list.prepend(todoList(listPrompt, firstChild));
	}
})
