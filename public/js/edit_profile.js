$(document).ready(function () {
    $('#readonly').click(function () {
        $("input[name='name']").removeAttr("readonly");
        $("input[name='email']").removeAttr("readonly");
        $("input[name='foot_size_cm']").removeAttr("readonly");
    });

    $('#readonly2').click(function () {
        $("input[name='old_password']").removeAttr("readonly");
        $("input[name='new_password']").removeAttr("readonly");
        $("input[name='new_password_confirmation']").removeAttr("readonly");
    });

    $("#saveChanges_Button").click(function () {
        $("#myForm").submit();
    });

    $("#saveChanges_Button2").click(function () {
        $("#myForm2").submit();
    });
});

const editButton = document.querySelector('#readonly');
const saveChangeButton = document.querySelector('#saveChanges_Button');

const editButton2 = document.querySelector('#readonly2');
const saveChangeButton2 = document.querySelector('#saveChanges_Button2');

editButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'block';
    editButton.style.display = 'none';
});

saveChangeButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'none';
    editButton.style.display = 'block';
});

editButton2.addEventListener('click', () => {
    saveChangeButton2.style.display = 'block';
    editButton2.style.display = 'none';
});

saveChangeButton2.addEventListener('click', () => {
    saveChangeButton2.style.display = 'none';
    editButton2.style.display = 'block';
});
