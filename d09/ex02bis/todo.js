var newList = $("#new");
var ft_list = $("#ft_list");


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
	let newDiv = $("<div></div>").attr({ id: cookie_id, onclick: "deltask(" + cookie_id + ")" });
	$(newDiv).text(input);
	return newDiv;
}

function todoList(input, firstChild) {
	let newDiv = $("<div></div>").attr({ id: firstChild, onclick: "deltask(" + firstChild + ")" });
	$(newDiv).text(input);
	return newDiv;
}

function deltask(id) {
	if (confirm("Are you sure that you want to remove me?")) {
		$("#" + id).remove();
		document.cookie = id + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	}
}

newList.on("click", function () {
	let listPrompt = prompt("New to-do: ");
	if (listPrompt != '') {
		let firstChild = parseInt($("#ft_list div:first-child").attr('id'));
		firstChild = firstChild + 1;
		document.cookie = firstChild + "=" + listPrompt;
		ft_list.prepend(todoList(listPrompt, firstChild));
	}
})
