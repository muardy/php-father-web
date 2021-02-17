function SubmitFormData() {
    var nama = $("#nama").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
	var subject = $("#subject").val();
	var pesan = $("#pesan").val();
    $.post("/arthayando/store", { nama: nama, email: email, phone: phone, subject : subject, pesan : pesan },
    function(data) {
	 
	 $('#myForm')[0].reset();
    });
}