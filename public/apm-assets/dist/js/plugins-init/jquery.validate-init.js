jQuery(".form-valide").validate({
    rules: {
        "val-nik": {
            required: !0,
            minlength: 16
        },
        "val-kategori": {
            required: !0,
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
        "val-deskripsi": {
            required: !0,
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
        },
        "val-bulan": {
            required: !0
        },
        "val-bulan2": {
            required: !0
        },
        "val-tahun": {
            required: !0
        },
        "val-status": {
            required: !0
        },
    },
    messages: {
        "val-nik": {
            required: "Mohon isi nik",
            minlength: "Panjang nik minimal 16 Karakter"
        },
        "val-kategori": {
            required: "Mohon isi kategori",
        },
        "val-bulan": {
            required: "Mohon pilih bulan",
        },
        "val-bulan2": {
            required: "Mohon pilih bulan222",
        },
        "val-tahun": {
            required: "Mohon pilih tahun",
        },
        "val-status": {
            required: "Mohon pilih status",
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
        "val-deskripsi": "Mohon isi deskripsi kategori",
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

jQuery(".form-valide-laporan-l-periode").validate({
    rules:{
        "val-bulan2": {
            required: !0
        },
        "val-tahun2": {
            required: !0
        },
    },
    messages:{
        "val-bulan2": {
            required: "Mohon pilih bulan",
        },
        "val-tahun2": {
            required: "Mohon pilih tahun",
        },
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
})


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