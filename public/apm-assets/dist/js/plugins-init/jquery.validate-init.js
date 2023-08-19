jQuery(".form-valide").validate({
    rules: {
        "val-nik": {
            required: !0,
            minlength: 16
        },
        "val-email": {
            required: !0,
            email: !0
        },
        "val-alamat": {
            required: !0,
        },
        "val-password": {
            required: !0,
            minlength: 5
        },
        "val-nama": {
            required: !0,
        },
        "val-kategori": {
            required: !0
        },
        "val-select2-multiple": {
            required: !0,
            minlength: 2
        },
        "val-suggestions": {
            required: !0,
            minlength: 5
        },
        "val-jeniskelamin": {
            required: !0
        },
        "val-currency": {
            required: !0,
            currency: ["$", !0]
        },
        "val-notelepon": {
            required: !0,
            url: !0
        },
        "val-jabatan": {
            required: !0,
            phoneUS: !0
        },
        "val-digits": {
            required: !0,
            digits: !0
        },
        "val-number": {
            required: !0,
            number: !0
        },
        "val-range": {
            required: !0,
            range: [1, 5]
        },
        "val-terms": {
            required: !0
        }
    },
    messages: {
        "val-nik": {
            required: "Mohon isi nik",
            minlength: "Panjang nik minimal 16 Karakter"
        },
        "val-email": "mohon isi alamat email",
        "val-password": {
            required: "Mohon Masukan Password",
            minlength: "Panjang Password Minimal 8 Karakter"
        },
        "val-alamat":{
            required: "Mohon isi alamat",
        },
        "val-nama": {
            required: "Mohon isi nama",
        },
        "vx`al-select2": "Please select a value!",
        "val-select2-multiple": "Please select at least 2 values!",
        "val-suggestions": "What can we do to become better?",
        "val-jeniskelamin": "Silahkan Pilih Jenis Kelamin!",
        "val-currency": "Please enter a price!",
        "val-notelepon": "Mohon masukan no telepon",
        "val-jabatan": "Mohon Pilih Jabatan!",
        "val-digits": "Please enter only digits!",
        "val-number": "Please enter a number!",
        "val-range": "Please enter a number between 1 and 5!",
        "val-terms": "You must agree to the service terms!"
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid"), jQuery(e).remove()
    },
});


jQuery(".form-valide-with-icon").validate({
    rules: {
        "val-username": {
            required: !0,
            minlength: 3
        },
        "val-password": {
            required: !0,
            minlength: 5
        }
    },
    messages: {
        "val-username": {
            required: "Please enter a username",
            minlength: "Your username must consist of at least 3 characters"
        },
        "val-password": {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
        }
    },

    ignore: [],
    errorClass: "invalid-feedback animated fadeInUp",
    errorElement: "div",
    errorPlacement: function(e, a) {
        jQuery(a).parents(".form-group > div").append(e)
    },
    highlight: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-invalid")
    },
    success: function(e) {
        jQuery(e).closest(".form-group").removeClass("is-invalid").addClass("is-valid")
    }




});