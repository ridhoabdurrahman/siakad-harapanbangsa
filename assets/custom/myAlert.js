const flashData = $(".flash-data").data("flashdata");
if (flashData) {
	Swal.fire({
		icon: "success",
		title: "Well Done",
		text: "Data have been saved Successfully!",
		confirmButtonText: "View Data",
		customClass: { confirmButton: "btn btn-primary" },
		buttonsStyling: !1,
	});
}
