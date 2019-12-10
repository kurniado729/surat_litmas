const flashdata = $('.flash-data') .data('flashdata');
if(flashdata){
	Swal.fire({
		title: 'Berhasil!',
		text: flashdata,
		icon: 'success',
		confirmButtonText: 'ok'
	})
}

const flashdatadanger = $('.flash-data-danger') .data('flashdata');
if(flashdatadanger){
	Swal.fire({
		icon: 'error',
		title: 'Oops...',
		text: flashdatadanger,
	})
}

//tombol hapus

$('.tombol-hapus').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin ?',
		text: "data akan dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, delete it!',
		cancelButtonText: 'No, cancel!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
			)
		}
	});
});


//tombol disposisi

$('.tombol-litmas').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin membuat litmas ?',
		text: "surat akan dibuat!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya',
		cancelButtonText: 'Tidak',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
			)
		}
	});
});

//tombol disposisi bkd

$('.tombol-disposisi-bkd').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin membuat disposisi ?',
		text: "surat akan didisposisi ke BKD!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, disposisi it!',
		cancelButtonText: 'No, cancel!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
			)
		}
	});
});

//tombol disposisi bka

$('.tombol-disposisi-bka').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin membuat disposisi ?',
		text: "surat akan didisposisi ke BKA!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, disposisi it!',
		cancelButtonText: 'No, cancel!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
			)
		}
	});
});


//tombol ajukan spt

$('.tombol-ajukan-spt').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin mengakjukan SPT ?',
		text: "SPT akan diajukan ke kepala!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes!',
		cancelButtonText: 'No!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
			)
		}
	});
});

//tombol logout

$('.tombol-logout').on('click', function (e) {
	e.preventDefault();
	const href = $(this).attr('href');
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-success',
			cancelButton: 'btn btn-danger'
		},
		buttonsStyling: false
	});

	swalWithBootstrapButtons.fire({
		title: 'Apakan anda yakin ?',
		text: "Anda Akan Keluar!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Yes, Logout!',
		cancelButtonText: 'No, cancel!',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		} else if (
			/* Read more about handling dismissals below */
			result.dismiss === Swal.DismissReason.cancel
		) {
			swalWithBootstrapButtons.fire(
				'Cancelled',
				'Welcome back :)',
				'error'
			)
		}
	});
});
