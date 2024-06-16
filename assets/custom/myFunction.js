function loadData(id) {
	$.ajax({
		type: "GET",
		url: `https://localhost/siakad-harapanbangsa/menu/get_menu/${id}`,
		dataType: "JSON",
		success: function (res) {
			$(".form-update").attr(
				"action",
				"https://localhost/siakad-harapanbangsa/menu/edit/" + id
			);
			$("#updateFormName").val(res.data.name);
		},
	});
}
