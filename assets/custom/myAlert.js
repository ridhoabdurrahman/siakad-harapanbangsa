const statusData = $(".flash-data").data("status");
const actionData = $(".flash-data").data("action");
const messageData = $(".flash-data").data("message");
let title, buttonText;
if (statusData) {
	if (statusData == "success") {
		title = "Well Done";
	} else {
		title = "Oops";
	}

	if (actionData == "delete") {
		buttonText = "OK";
	} else {
		buttonText = "View Data";
	}
	Swal.fire({
		icon: statusData,
		title: title,
		text: messageData,
		confirmButtonText: buttonText,
		customClass: {
			confirmButton: "btn btn-primary",
		},
		buttonsStyling: !1,
	});
}

const confirmDelete = (href) => {
	Swal.fire({
		icon: "warning",
		title: "Are you sure?",
		html: "<p>This will delete this data <b>Permanently</b>. You cannot undo this action.</p>",
		confirmButtonText: "Yes, Delete it!",
		showCancelButton: !0,
		customClass: {
			confirmButton: "btn btn-danger me-3",
			cancelButton: "btn btn-label-secondary",
		},
		buttonsStyling: !1,
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
};
