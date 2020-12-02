const flashData1 = $('#registered').data('flashdata');
const flashData2 = $('#x_email').data('flashdata');
const flashData3 = $('#x_active').data('flashdata');
const flashData4 = $('#x_password').data('flashdata');
const flashData5 = $('#logout').data('flashdata');
const flashData6 = $('#newmenu').data('flashdata');
const flashData7 = $('#editM').data('flashdata');
const flashData8 = $('#deleteM').data('flashdata');
const flashData9 = $('#newSubMenu').data('flashdata');
const flashData10 = $('#access').data('flashdata');
const flashData11 = $('#editUser').data('flashdata');
if (flashData1) {
    Swal.fire({
        title: 'CONGRATULATION!',
        text: 'Your account has been ' + flashData1,
        icon: 'success',
        confirmButtonText: 'Mantap!'
    });
}
if (flashData2) {
    Swal.fire({
        title: 'LOGIN FAILED!',
        text: 'Your email is not ' + flashData2,
        icon: 'error',
        confirmButtonText: 'Register First!'
    });
}
if (flashData3) {
    Swal.fire({
        title: 'LOGIN FAILED!',
        text: 'Your email has not been ' + flashData3,
        icon: 'error',
        confirmButtonText: 'Check your email to activate!'
    });
}
if (flashData4) {
    Swal.fire({
        title: 'LOGIN FAILED!',
        text: 'You have entered a ' + flashData4 + ' password',
        icon: 'error',
        confirmButtonText: 'Try another one!'
    });
}
if (flashData5) {
    Swal.fire({
        title: 'LOG OUT SUCCESS!',
        text: 'You have been ' + flashData5,
        icon: 'success',
        confirmButtonText: 'Thanks!'
    });
}
if (flashData6) {
    Swal.fire({
        title: 'Congratulation!',
        text: flashData6 + ' have been added succesfully!',
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
if (flashData7) {
    Swal.fire({
        title: 'Congratulation!',
        text: 'Selected menu have been ' + flashData7 +  ' succesfully!',
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
if (flashData8) {
    Swal.fire({
        title: 'Congratulation!',
        text: 'Selected menu have been ' + flashData8 +  ' succesfully!',
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
if (flashData9) {
    Swal.fire({
        title: 'Congratulation!',
        text: flashData9 + ' have been added succesfully!',
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
if (flashData10) {
    Swal.fire({
        title: 'Congratulation!',
        text: 'Access ' + flashData10,
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
if (flashData11) {
    Swal.fire({
        title: 'Congratulation!',
        text: 'User have been ' + flashData11 + ' successfully',
        icon: 'success',
        confirmButtonText: 'Cool!'
    });
}
//tombol-logout
$('#out').on('click',function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'LOG OUT',
        text: "Are you sure?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sure!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href =href;
        }
        })
})

//tombol hapus
$('#delete-button').on('click',function(e) {
    e.preventDefault();
    const href = null;
    href = $(this).attr('href');

    Swal.fire({
        title: 'DELETE THIS MENU?',
        text: "This menu will be deleted permanently!",
        icon: 'danger',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sure!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href =href;
        }
        })
})