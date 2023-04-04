$(document).ready(function()
{
 $('#readonly').click(function()
 {
   $("input[name='name']").removeAttr("readonly");
   $("input[name='email']").removeAttr("readonly");
   $("input[name='foot_size_cm']").removeAttr("readonly");
 });

 });

const editButton = document.querySelector('#readonly');
const saveChangeButton = document.querySelector('#saveChanges_Button');

editButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'block';
    editButton.style.display = 'none';
});
saveChangeButton.addEventListener('click', () => {
    saveChangeButton.style.display = 'none';
    editButton.style.display = 'block';
});


$(document).ready(function() {
    $("#saveChanges_Button").click(function() {
        $("#myForm").submit();
    });
 });
