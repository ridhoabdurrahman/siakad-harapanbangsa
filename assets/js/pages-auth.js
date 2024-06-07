"use strict";
const formAuthentication = document.querySelector("#formAuthentication");
const devUrl = "https://localhost/siakad-harapanbangsa/";
document.addEventListener("DOMContentLoaded", function (e) {
	var t;
	formAuthentication &&
		FormValidation.formValidation(formAuthentication, {
			fields: {
				fullname: {
					validators: {
						notEmpty: {
							message: "Please enter your fullname",
						},
					},
				},
				username: {
					validators: {
						notEmpty: { message: "Please enter username" },
						stringLength: {
							min: 6,
							message: "Username must be more than 6 characters",
						},
						remote: {
							url: devUrl + "auth/check_username",
							method: "POST",
							data: function () {
								return {
									username:
										formAuthentication.querySelector('[name="username"]').value,
								};
							},
							message: "This username has been taken",
						},
					},
				},
				email: {
					validators: {
						notEmpty: { message: "Please enter your email" },
						emailAddress: { message: "Please enter valid email address" },
						remote: {
							url: devUrl + "auth/check_email",
							method: "POST",
							data: function () {
								return {
									email:
										formAuthentication.querySelector('[name="email"]').value,
								};
							},
							message: "This email has been registered",
						},
					},
				},
				email_username: {
					validators: {
						notEmpty: { message: "Please enter email / username" },
						stringLength: {
							min: 6,
							message: "Username must be more than 6 characters",
						},
					},
				},
				password: {
					validators: {
						notEmpty: { message: "Please enter your password" },
						stringLength: {
							min: 6,
							message: "Password must be more than 6 characters",
						},
					},
				},
				"confirm-password": {
					validators: {
						notEmpty: { message: "Please confirm password" },
						identical: {
							compare: function () {
								return formAuthentication.querySelector('[name="password"]')
									.value;
							},
							message: "The password and its confirm are not the same",
						},
					},
				},
				terms: {
					validators: {
						notEmpty: { message: "Please agree terms & conditions" },
					},
				},
			},
			plugins: {
				trigger: new FormValidation.plugins.Trigger(),
				bootstrap5: new FormValidation.plugins.Bootstrap5({
					eleValidClass: "",
					rowSelector: ".mb-3",
				}),
				submitButton: new FormValidation.plugins.SubmitButton(),
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
				autoFocus: new FormValidation.plugins.AutoFocus(),
			},
			init: (e) => {
				e.on("plugins.message.placed", function (e) {
					e.element.parentElement.classList.contains("input-group") &&
						e.element.parentElement.insertAdjacentElement(
							"afterend",
							e.messageElement
						);
				});
			},
		}),
		(t = document.querySelectorAll(".numeral-mask")).length &&
			t.forEach((e) => {
				new Cleave(e, { numeral: !0 });
			});
});
