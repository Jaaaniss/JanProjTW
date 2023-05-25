function showEditForm(commentId, content) {
    document.getElementById('commentContent' + commentId).style.display = 'none';
    document.getElementById('editComment' + commentId).style.display = 'block';
    document.getElementById('commentTextArea' + commentId).value = content;
}

function cancelEdit(commentId, content) {
    document.getElementById('commentContent' + commentId).style.display = 'block';
    document.getElementById('editComment' + commentId).style.display = 'none';
    document.getElementById('commentTextArea' + commentId).value = content;
}


setTimeout(function() {
    var alert = document.getElementById('alert');
    alert.style.opacity = '0';
    setTimeout(function() {
        alert.style.display = 'none';
    }, 10);
}, 2000);
