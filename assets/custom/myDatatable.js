const devUrl = "https://localhost/siakad-harapanbangsa/";
$(document).ready(function () {
	var table = $("#menuTable");
	table.DataTable({
		processing: true,
		serverSide: true,
		ordering: true,
		order: [[0, "asc"]],
		ajax: {
			url: `${devUrl}menu/get_all_menu`,
			type: "post",
		},
		aLengthMenu: [
			[10, 25, 50],
			[10, 25, 50],
		],
		columns: [
			{ data: "id" },
			{
				data: "name",
			},
			{ data: "id" },
		],
		columnDefs: [
			{
				width: "3%",
				targets: 0,
				orderable: false,
				searchable: false,
			},
			{
				orderable: false,
				targets: 2,
				width: "15%",
				className: "text-center",
				render: function (data, type, row, meta) {
					let html = `<a class="btn btn-warning text-white btn-sm me-2"><span class="tf-icons fa-solid fa-pen-to-square me-1"></span> Edit</a><a class="btn btn-danger text-white btn-sm ms-2"><span class="tf-icons fa-solid fa-trash-can me-1"></span> Delete</a>`;
					return html;
				},
			},
		],
	});
});
